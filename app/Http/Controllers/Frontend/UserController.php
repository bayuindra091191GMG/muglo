<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Address;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
//        $address = Address::where('user_id', Auth::id())->first();
        $user = Auth::user();

        return view('frontend.show-user-profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('frontend.edit-user-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'fname'            => 'required|max:100',
                'lname'            => 'required|max:100',
                'phone'            => 'required|max:20'
            ]
        );

        if($validator->fails()){
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = Auth::user();

        $user->first_name = Input::get('fname');
        $user->last_name = Input::get('lname');
        $user->phone = Input::get('phone');

        $user->save();

        Session::flash('message', 'Profile Updated!');

        return Redirect::route('user-profile');
    }

    public function passwordChange(){
        return View('frontend.edit-password');
    }

    public function passwordUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password-current'      => 'required',
            'password'              => 'required|min:6|max:20|same:password',
            'password-confirm' => 'required|same:password'
        ]);

        if($validator->fails()){
            $this->throwValidationException(
                $request, $validator
            );
        }

        $curentPassword = Auth::user()->password;
        if(Hash::check(Input::get('password-current'), $curentPassword))
        {
            $user_id = Auth::user()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make(Input::get('password'));
            $obj_user->save();

            Session::flash('success', 'success');

            return Redirect::route('password-edit');
        }
        else{
            return redirect()->back()->withErrors('Kata sandi anda salah!', 'default');
        }
    }
}
