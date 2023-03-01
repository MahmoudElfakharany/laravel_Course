<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\user;


class usersController extends Controller
{
    //
    function viewusers (){

        $users = user::paginate(10);

        return view ("viewusers",["users" => $users]);
    }
    

    function viewusersDetails ($id){

        $users = user::where ('id',$id)->first();

        return view ("usersDetails",["users" => $users]);
    }
}
