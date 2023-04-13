<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Carbon\Carbon;

class BlogController extends Controller
{


     //Front Page

     public function viewblogs()
     {
       $recentBlog = $this->getRecentBlog();
       $recentComment = $this->getRecentComment();

       $blogs = Blog::all();
       $comments = Comment::all();
       return view('users.blog', compact('recentBlog','blogs', 'recentComment'));
     }



     //Get One Recent Blog Post
    public function getRecentBlog() {
    $recentBlog = Blog::latest()->first();
    $recentBlog->duration = Carbon::now()->diffForHumans(Carbon::parse($recentBlog->created_at));
    return $recentBlog;
    }


     //Get two Recent comments
     public function getRecentComment() {
        $recentComment = Comment::latest()->first();
        $recentComment->duration = Carbon::now()->diffForHumans(Carbon::parse($recentComment->created_at));
        return $recentComment ;
    }


    //Post Comment on Blog
    public function postComment(Request $request) {
        $comment = new Comment;
        $comment->blog_title = $request->input('blog_title');
        $comment->name = $request->input('name');
        $comment->text = $request->input('text');
        if ($comment->save()) {
            return redirect()->back()->with('success', 'Commented Successfully');
        } else {
            return redirect()->back()->with('error', 'Comment was not successful');
        }
    }

    // Get Blog List
    public function getblog($id = null)
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

    ///End of  Get Blog List


   //Admin  Blog Side
    public function post() {
        $blogs = Blog::all();
        return view('admin.blog.post.index', compact('blogs'));
    }

    //create a blog post
    public function postblog(Request $request){
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

    //Edit Blog
    public function editBlog($id){
        $findBlog = Blog::findOrFail($id);
        return view('admin.blog.post.edit-blog',compact('findBlog'));
      }

      //Update Blog
      public function updateBlog(Request $request, $id){
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
    public function deleteBlog($id){
    Blog::destroy($id);
    return redirect()->back()->with('success', 'Blog Data Deleted successfully');
    }

   //Delete Comments
   public function deleteComment($id){
    Comment::destroy($id);
    return redirect()->back()->with('success', 'Comments Data Deleted successfully');
   }

    public function comment() {
    $comments = Comment::with('blog')->get();
     return view('admin.blog.comment.index', compact('comments'));
     }

     // Get User Comments on Blog
     public function getComments($id=null){
        if($id){
            $comment = Comment::find($id);
            $comment->duration = Carbon::now()->diffForHumans(Carbon::parse($comment->created_at));
        }else{
            $comments = Comment::all();
            foreach ($comments as $comment) {
                $comment->duration = Carbon::now()->diffForHumans(Carbon::parse($comment->created_at));
                $comment->blog_title = $comment->blog->title;
            }
        }

        return $comments??$comment;
        }

//End of Admin Logics






}





