<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

    public function index()
    {

        //dd((array_first($this->getData())));
        return view('address/index',['data' => $this->getData()]);
    }
    public function create()
    {
        return view('address/create');
    }
    public function store(Request $request)
    {
        $first_name = $request->input('Address');
        dd($first_name);
    }



    public function destroy($id)
    {
        $data = $this->getData();
        unset($data[$id]);
        $encoded = json_encode($data,JSON_PRETTY_PRINT);
        //dd($encoded);
        file_put_contents('data.json',$encoded);


    }

    public function getData()
    {
        $file = file_get_contents('data.json');
        $data = json_decode($file,true);
        return $data;

    }
}
