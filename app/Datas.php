<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Datas extends Model
{
    //

    public static function select(){

     //return  DB::table('list')->get() ;
     return  DB::table('list')->paginate(3);
    }

    
    public static function getById($id){

       return DB::table('list')->where('id', '=', $id)->get();
    }

    
    public static function delById($id){

        return DB::table('list')->where('id', '=', $id)->delete();
     }

    public static function UpdateValues($vals){

        return DB::table('list')->where('id', '=', $vals['id'])
->update(array('firstName' => $vals['firstName'],'lastName' => $vals['lastName']));
    }
    
    public static function Insert($vals){

        return DB::table('list')->insert(array('firstName' => $vals['firstName'], 'lastName' => $vals['lastName'], 'email' => $vals['email']));
    }
}
