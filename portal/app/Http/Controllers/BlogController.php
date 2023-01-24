<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function post() {

        return view('admin.blog.post.index');
    }

    public function postblog(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',

        ]);
        $title = $request->input('title');
        $author = $request->input('author');
        $image = $request->file('image');
        $content = $request->input('content');

        $image = $request->file('image');
        $imageName = time() . '.' .$image->extension();
        $image->move(public_path('blog_images'), $imageName);


        $blogPost=new Blog;
        $blogPost->title=$title;
        $blogPost->author='AUTOFIXER';
        $blogPost->image = $image;
        $blogPost->content=$content;
        if($blogPost->save()){
            return redirect()->route('blog.post.index');

        }else{
            return ["result"=>"Blog not successful"];
        }


    }


    public function getblog($id=null)
    {
        if($id){
            $blog = Blog::find($id);
        }else{
            $blog = Blog::all();
        }
        return $blog;
    }

    public function comment() {
        return view('admin.blog.comment.index');
    }

    public function postComment(Request $request) {
        $comment = new Comment;
        $comment->blog_id = $request->blog_id;
        $comment->name = $request->name;
        $comment->text = $request->text;
        if($comment->save())
        {
            return ["result" => "Commented Successfully"];
        }else{
            return ["result"=>"Comment was not successful"];
        }
    }

    public function getComments($id=null)
    {
        if($id){
            $comment = Comment::find($id);
        }else{
            $comment = Comment::all();
        }
        return $comment;

    }
}
