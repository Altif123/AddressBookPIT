<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function readJson(){

        $data = json_decode(file_get_contents('data.json'),true);
        //dd(var_dump($data[0]));
        return $data;


    }

    public function getAllAddress(){



    }
}
