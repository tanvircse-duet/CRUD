<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view ("create");
    }

    public function ourstore(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=> 'nullable|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $data = new Post;
        $data->name= $request->name;
        $data->description = $request->description;

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('Images'), $image_name);
        $data->image = 'Images/'.$image_name;
        }
        $data->save();
        return redirect("/create")->with("success","Post Created Successfully");
    }


}
