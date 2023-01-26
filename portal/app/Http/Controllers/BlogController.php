<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function post() {

        $blogs = Blog::all();
        return view('admin.blog.post.index', compact('blogs'));
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
        $blogPost->image = $imageName;
        $blogPost->content=$content;
        if($blogPost->save()){
            return redirect()->route('blog.post.index');

        }else{
            return ["result"=>"Blog not successful"];
        }


    }

// Get Blog List
    public function getblog($id=null)
    {
        if($id){
            $blog = Blog::find($id);
            $blog->duration = Carbon::now()->diffForHumans(Carbon::parse($blog->created_at));
        }else{
            $blogs = Blog::all();
            foreach ($blogs as $blog) {
                $blog->duration = Carbon::now()->diffForHumans(Carbon::parse($blog->created_at));
            }
        }
        return $blogs ?? $blog;

    }

    //Get One Recent Blog Post
    public function getRecentBlog() {
        $recentBlog = Blog::latest()->first();
        $recentBlog->duration = Carbon::now()->diffForHumans(Carbon::parse($recentBlog->created_at));
        return $recentBlog;
    }

    //Edit Blog
    public function editBlog($id){
        $findBlog = Blog::findOrFail($id);
        return view('admin.blog.post.edit-blog',compact('findBlog'));

      }

      //Update Blog
      public function updateBlog(Request $request, $id)
      {
        $findBlog = Blog::findOrFail($id);
        $image = $request->file('image');
       if($image){
       $imageName = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/blog_images');
       $image->move($destinationPath, $imageName);
       $findBlog->image = $imageName;
    }

        $findBlog->title=request('title');
        $findBlog->content=request('content');
        $findBlog->image = $imageName;
        $findBlog->update();
        $notify[] = ['success', 'Blog Data Updated successfully'];
        return redirect("/post")->withNotify($notify);
    }

    //Delete Blog
    public function deleteBlog($id)
{
    Blog::destroy($id);
    return redirect()->back()->with('success', 'Blog Data Deleted successfully');
}

//Delete Comments
public function deleteComment($id)
{
    Comment::destroy($id);
    return redirect()->back()->with('success', 'Comments Data Deleted successfully');

}



    public function comment() {
        $comments = Comment::with('blog')->get();
        return view('admin.blog.comment.index', compact('comments'));
    }

    //Post Comment on Blog
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


    // Get User Comments on Blog
    public function getComments($id=null)
{
    if($id){
        $comment = Comment::find($id);
        $comment->duration = Carbon::now()->diffForHumans(Carbon::parse($comment->created_at));
    }else{
        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment->duration = Carbon::now()->diffForHumans(Carbon::parse($comment->created_at));
        }
    }

    return $comments??$comment;
}

}





