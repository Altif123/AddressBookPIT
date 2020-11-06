<?php

namespace App\Http\Controllers;

class AddressController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getJson()
    {

        $data = json_decode(file_get_contents('data.json'),true);
        dd($data);
        return view('hello');
    }

}
