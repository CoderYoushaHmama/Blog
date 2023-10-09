<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //edit function
    public function edit(PostRequest $request,$object_id){
        $title = $request->input('title');
        $object = $request->input('object');
        $post = Post::find($object_id);
        
        $post->update([
            'title'=>$title,
            'object'=>$object
        ]);
        return redirect()->route('view',$object_id);
    }

    //delete function
    public function delete($object_id){
        $post = Post::find($object_id);
        if (File::exists(public_path('posts_images/'.$post->image))) {
            File::delete(public_path('posts_images/'.$post->image));
        }
        $post->delete();
        return redirect()->route('blog');
    }

    //create object function
    public function create(PostRequest $request){
        $user = Auth::guard('user')->user();
        $title = $request->input('title');
        $object = $request->input('object');
        $image = $request->image;
        $file_name = null;

        if($image){
            $extension = $image->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $path = 'posts_images';
            $image->move($path,$file_name);
            Post::create([
                'title'=>$title,
                'object'=>$object,
                'image'=>$file_name,
                'date'=>date('Y-m-d'),
                'user_id'=>$user->id
            ]);
            return redirect()->route('blog');
        }

        Post::create([
            'title'=>$title,
            'object'=>$object,
            'date'=>date('Y-m-d'),
            'user_id'=>$user->id
        ]);
        return redirect()->route('blog');
    }
}
