<?php

namespace App\Http\Controllers;
use App\models\posts;

use Illuminate\Http\Request;

class postsController extends Controller
{
    function viewPosts (){

        $posts = posts::get();

        return view ("viewPage",["posts" => $posts]);
    }
    function viewdes ($id){

        $posts = posts::where ('id',$id)->first();

        return view ("despage",["posts" => $posts]);
    }
    function create (){
        return view ("create");
    }
    function update ($id){
        $posts = posts::find($id);
        return view ("update",compact("posts"));
    }

    function edit($id, Request $request)
    {
        $posts = posts::find($id);
        $posts->update($request->except(['_method', '_token']));
        return redirect()->route('viewPage');
    }
    function store(Request $request)
    {
        // $validated = $request->validate([
        //     'tilte' => 'required',
        //     'postedBy' => 'required',
        //     'createdAt' => 'required',
        //     'description' => 'required',
        // ]);

        posts::create($request->all());
        return redirect()->route('viewPage');
    }
    function destroy($id)
    {
        $posts = posts::find($id);
        $posts->delete();
        return redirect()->route("viewPage");
    }
}
