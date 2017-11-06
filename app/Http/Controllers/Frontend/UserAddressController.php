<?php

namespace App\Http\Controllers\Frontend;

use App\libs\RajaOngkir;
use App\Models\Address;
use App\Models\City;
use App\Models\Province;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserAddressController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $addr = Address::where('user_id', Auth::id())->first();

        return View('frontend.show-user-address', compact('addr'));
    }

    public function edit()
    {
        $provinces = Province::all();

        $addr = Address::where('user_id', Auth::id())->first();

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

        return view('frontend.edit-user-address')->with($data);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'          => 'required',
            'province'      => 'required|option_not_default',
            'city'          => 'required|option_not_default',
            'subdistrict'   => 'required|option_not_default',
            'postal'        => 'required',
            'detail'        => 'required'
        ],[
            'name.required'                     => 'Nama penerima harus diisi',
            'province.option_not_default'       => 'Provinsi harus diisi',
            'city.option_not_default'           => 'Kota harus diisi',
            'subdistrict.option_not_default'    => 'Kecamatan harus diisi',
            'postal.required'                   => 'Kode pos harus diisi',
            'detail.required'                   => 'Detil alamat harus diisi'
        ]);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $province = Province::find(Input::get('province'));
        $city = explode(',', Input::get('city'));
        $subdistrict = explode(',', Input::get('subdistrict'));

        $data = Address::where('user_id', Auth::id())->first();
        $data->city_id = $city[0];
        $data->city_name = $city[1];
        $data->province_id = Input::get('province');
        $data->province_name = $province->name;
        $data->subdistrict_id = $subdistrict[0];
        $data->subdistrict_name = $subdistrict[1];
        $data->name = Input::get('name');
        $data->postal_code = Input::get('postal');
        $data->detail = Input::get('detail');
        $data->user_id = Auth::id();
        $data->status_id = 1;

        $data->save();

        if(!empty(Input::get('redirect')) && Input::get('redirect') == 'checkout'){
            return redirect()->route('step1');
        }

        return redirect()->route('user-address-show');
    }

    public function create()
    {
        $provinces = Province::all();

        $redirect = 'default';
        if(!empty(request()->redirect)){
            $redirect = 'checkout';
        }

        $data = [
            'provinces'     => $provinces,
            'redirect'      => $redirect
        ];

        return View('frontend.create-user-address')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'          => 'required',
            'province'      => 'required|option_not_default',
            'city'          => 'required|option_not_default',
            'subdistrict'   => 'required|option_not_default',
            'postal'        => 'required',
            'detail'        => 'required'
        ],[
            'name.required'                     => 'Nama penerima harus diisi',
            'province.option_not_default'       => 'Provinsi harus diisi',
            'city.option_not_default'           => 'Kota harus diisi',
            'subdistrict.option_not_default'    => 'Kecamatan harus diisi',
            'postal.required'                   => 'Kode pos harus diisi',
            'detail.required'                   => 'Detil alamat harus diisi'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $province = Province::find(Input::get('province'));
        $city = explode(',', Input::get('city'));
        $subdistrict = explode(',', Input::get('subdistrict'));

        $data = new Address();
        $data->city_id = $city[0];
        $data->city_name = $city[1];
        $data->province_id = Input::get('province');
        $data->province_name = $province->name;
        $data->subdistrict_id = $subdistrict[0];
        $data->subdistrict_name = $subdistrict[1];
        $data->name = Input::get('name');
        $data->postal_code = Input::get('postal');
        $data->detail = Input::get('detail');
        $data->user_id = Auth::id();
        $data->status_id = 1;

        $data->save();

        if(!empty(Input::get('redirect')) && Input::get('redirect') == 'checkout'){
            return redirect()->route('step1');
        }

        return redirect()->route('user-address-show');
    }

    public function getCity($provinceId){
        error_log('CHECK');

        $client = new Client([
            'base_uri' => 'https://pro.rajaongkir.com/api/city?province='. $provinceId,
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY')
            ],
        ]);

        $request = $client->request('GET', 'https://pro.rajaongkir.com/api/city?province='. $provinceId);

        if($request->getStatusCode() == 200){
            $collect = json_decode($request->getBody());

            $returnHtml = View('frontend.partials._city-option',['collect' => $collect])->render();

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

            $returnHtml = View('frontend.partials._subdistrict-option',['collect' => $collect])->render();

            return response()->json( array('success' => true, 'html' => $returnHtml) );
        }
    }
}
