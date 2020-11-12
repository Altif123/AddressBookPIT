<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AddressController extends Controller
{

    /**
     * Display all data
     *
     * @return Json data
     */
    public function index()
    {

        return view('address/index',['data' => $this->getData()]);
    }
    /**
     * @return create form view
     */
    public function create()
    {
        return view('address/create');
    }

    /**
     * Store the data entered on the create form to the json file
     *
     * @param Request $request
     * @return json response
     */
    public function store(Request $request)
    {
        $data = $this->getData();
        $input = $request->all();
        array_push($data,$input);
        $this->encodeToJson($data);
        return response('saved Successfully', 200)->json();
    }

    /**
     * @param $id
     * @return edit form view
     */
    public function edit($id)
    {
        return view('address/update', [
            'person'=> $this->getData()[$id],
            'personId' => $id
        ]);
    }

    /**
     * Updates the json file with new item
     *
     * @param Request $request
     * @param $id
     * @return json response
     */
    public function update(Request $request, $id)
    {

        $update = $request->all();
        $this->getData()[$id] = $update;
        $this->encodeToJson($update);
        return response()->json("Successfully Updated Record", 200);
    }

    /**
     * Deletes item from json file
     *
     * @param $id
     * @return json response
     */
    public function destroy($id)
    {
        $data = $this->getData();
        unset($data[$id]);
        $this->encodeToJson($data);
        return response()->json( 'Successfully Deleted', 200);
    }
    /**
     * Pulls data from the json file
     *
     * @return data array
     */
    public function getData()
    {
        $file = file_get_contents('data.json');
        $data = json_decode($file,true);
        sort($data);
        return $data;

    }

    /**
     * Writes data to json file
     *
     * @param $data
     * @return void
     */
    public function encodeToJson($data)
    {
        $encoded = json_encode($data,JSON_PRETTY_PRINT);
        file_put_contents('data.json',$encoded);
    }
}
