<?php

namespace App\Http\Controllers\Admin;

use App\libs\RajaOngkir;
use App\Models\City;
use App\Models\Province;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StoreDatum;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OptionAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user_admins');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        $data = [
            'provinces'     => $provinces
        ];

        return View('admin.create-address-option')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'province'          => 'required|option_not_default',
            'city'              => 'required|option_not_default',
            'subdistrict'       => 'required|option_not_default',
            'postal_code'       => 'required',
            'detail'            => 'required'
        ],[
            'province.option_not_default'    => 'Pilih provinsi'
        ]);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $province = Province::find(Input::get('province'));
        $city = explode(',', Input::get('city'));
        $subdistrict = explode(',', Input::get('subdistrict'));

        $storedata = StoreDatum::all();

        if($storedata->count() == 0){
            $data = StoreDatum::create([
                'address_name'      => Input::get('name'),
                'address_detail'    => Input::get('detail'),
                'province_id'       => $province->id,
                'province_name'     => $province->name,
                'city_id'           => $city[0],
                'city_name'         => $city[1],
                'subdistrict_id'    => $subdistrict[0],
                'subdistrict_name'  => $subdistrict[1],
                'postal_code'       => Input::get('postal_code')
            ]);
        }
        else{
            $data = $storedata->first();

            $data->address_name = Input::get('name');
            $data->address_detail = Input::get('detail');
            $data->province_id = $province[0];
            $data->province_name = $province[1];
            $data->city_id = $city[0];
            $data->city_name = $city[1];
            $data->subdistrict_id = $subdistrict[0];
            $data->subdistrict_name = $subdistrict[1];
            $data->postal_code = Input::get('postal_code');

            $data->save();
        }

        Session::flash('message', 'Sukses buat alamat baru!');

        return redirect()->route('store-option');
    }

    public function edit()
    {
        $provinces = Province::all();

        $data = StoreDatum::all();
        $addr = $data->first();

        $collect1 = RajaOngkir::getSubdistrict($addr->city_id);
        $subdistricts = $collect1->rajaongkir->results;

        $collect2 = RajaOngkir::getCity($addr->province_id);
        $cities = $collect2->rajaongkir->results;

        $redirect = 'default';
        if(!empty(request()->redirect)){
            $redirect = 'checkout';
        }

        $data = [
            'provinces'         => $provinces,
            'cities'            => $cities,
            'addr'              => $addr,
            'subdistricts'      => $subdistricts,
            'redirect'          => $redirect
        ];

        return view('admin.edit-address-option')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'province'          => 'required|option_not_default',
            'city'              => 'required|option_not_default',
            'subdistrict'       => 'required|option_not_default',
            'postal-code'       => 'required',
            'detail'            => 'required'
        ],[
            'option_not_default'    => 'Invalid input'
        ]);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $storedata = StoreDatum::all();
        $data = $storedata->first();

        $data->address = Input::get('detail');
        $data->province_id = Input::get('province');
        $data->city_id = Input::get('city');
        $data->subdistrict_id = Input::get('subdistrict');
        $data->postal_code = Input::get('postal_code');

        $data->save();

        Session::flash('message', 'Update Success!');

        return redirect('admin/option/address');
    }

    public function getCity($provinceId){
        $client = new Client([
            'base_uri' => 'https://pro.rajaongkir.com/api/city?province='. $provinceId,
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY')
            ],
        ]);

        $request = $client->request('GET', 'https://pro.rajaongkir.com/api/city?province='. $provinceId);

        if($request->getStatusCode() == 200){
            $collect = json_decode($request->getBody());

            $returnHtml = View('admin.partials._city-option',['collect' => $collect])->render();

            return response()->json( array('success' => true, 'html' => $returnHtml) );
        }
    }

    public function getSubdistrict($cityId){
        $client = new Client([
            'base_uri' => 'https://pro.rajaongkir.com/api/subdistrict?city='. $cityId,
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY')
            ],
        ]);

        $request = $client->request('GET', 'https://pro.rajaongkir.com/api/subdistrict?city='. $cityId);

        if($request->getStatusCode() == 200){
            $collect = json_decode($request->getBody());

            $returnHtml = View('admin.partials._subdistrict-option',['collect' => $collect])->render();

            return response()->json( array('success' => true, 'html' => $returnHtml) );
        }
    }
}
