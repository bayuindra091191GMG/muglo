<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 16/11/2017
 * Time: 10:26
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\StoreDatum;

class OptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user_admins');
    }

    public function index(){
        $storedata = StoreDatum::all();
        $option = $storedata->first();

        return View('admin.show-store-options', compact('option'));
    }
}