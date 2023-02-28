<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\author;


class AuthorController extends Controller
{
    //
    function viewAuthor (){

        $authors = author::get();

        return view ("viewAuthor",["authors" => $authors]);
    }

    function viewAuthorDetails ($id){

        $authors = author::where ('id',$id)->first();

        return view ("AuthorDetails",["authors" => $authors]);
    }
}
