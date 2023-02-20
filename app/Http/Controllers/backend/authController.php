<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{

    public function welcome(){
        echo "ok";
    }

    public function setLogin(Request $req) {

        echo $req->email;
        echo $req->pass;

    }


}
