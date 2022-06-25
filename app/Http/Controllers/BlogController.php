<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Helper;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function get_index()
    {
        $params['data'] = auth()->user()->type == 'author' ?
            Blog::where('author_id', auth()->user()->id)->orderBy('title', 'ASC')->paginate(10) :
            Blog::orderBy('title', 'ASC')->paginate(10);
        return view('backend.page.index', $params);
    }

    public function get_action($action, $id = null)
    {
        if($action != 'create' && $action != 'update'){
            return redirect()->route('backend.page.index');
        }

        $params['action'] = $action;
        if ($id != null) {
            $params['blog'] = Blog::find($id);
            if ($params['blog'] == null || auth()->user()->id != $params['blog']->author_id) {
                return redirect()->back()->with('error', 'Blog tidak ditemukan.');
            }
        }
        return view('backend.page.form', $params);
    }

    public function post_action(Request $request, $action, $id = null)
    {
        $params['action'] = $action;
        $blog = null;
        if ($id != null) {
            $blog = Blog::find($id);
            if ($blog == null || auth()->user()->id != $blog->author_id) {
                return abort(404);
            }

            if($request->method == 'delete'){
                Helper::remove_image($blog->image);
                $blog->delete();
                return redirect()->route('backend.page.index')->with('success', 'Blog berhasil dihapus.');
            }

            if($request->has('image')){
                $blog->image = Helper::update_image($blog->image, 'uploads/blogs/images', $request->image);
            }
        } else {
            $blog = new Blog();
            $blog->author_id = auth()->user()->id;
            $blog->image = Helper::upload_image('uploads/blogs/images', $request->image);
        }

        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->content = $request->content;

        $bool = $action == 'create' ? $blog->save() : $blog->update();

        if ($bool) {
            return redirect()->route('backend.page.index')->with('success', 'Blog berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Blog gagal disimpan.');
        }
    }
}
