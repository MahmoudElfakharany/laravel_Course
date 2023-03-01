<?php

namespace App\Http\Controllers;
use App\models\posts;
use App\models\user;

use Illuminate\Http\Request;

class postsController extends Controller
{
    function viewPosts (){

        $posts = posts::paginate(10);

        return view ("viewPage",["posts" => $posts]);
    }
    function viewdes ($id){

        $posts = posts::where ('id',$id)->first();

        return view ("despage",["posts" => $posts]);
    }
    function create (){
        $users = user::get();

        return view ("create",["users" => $users]);
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
        //     'user_id' => 'required',
        //     'created_at' => 'required',
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
