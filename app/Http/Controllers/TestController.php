<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestController extends Controller
{
    //probar la conexion a la base de datos

    function testDb(){

        try{
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
        }
else{
            echo 'Connection Failed !!';
    }

}
        catch(\Exception $e){
          echo $e->getMessage();
        }
    }
}
