<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, $id)
    {
        Comment::create([
            'body' => $request->body,
            'post_id' => $request->id,
            'user_id' => Auth::id(),
        ]);

        return back();
    }
    public function showUpdateCommentForm($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('blog.update', compact('comment'));
    }
    public function update(Request $request, $id)
    {
        $comment = Comment::where('id', $id)->first();
        $post_id = $comment->post_id;
        $post = Post::where('id', $post_id)->first();
        Comment::where('id', $id)->update([
            'body' => $request->body

        ]);

        return redirect()->action('BlogController@show', $slug = $post->slug);
    }

    public function destroy($id)
    {
        Comment::where('id', $id)->delete();

        return redirect()->back();
    }
}
