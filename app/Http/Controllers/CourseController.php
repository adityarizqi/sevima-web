<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Helper;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function get_index()
    {
        $courses = Course::where('author_id', auth()->user()->id)->orderBy('title', 'ASC')->paginate(10);
        return view('backend.course.index', ['data' => $courses]);
    }

    public function get_action($action, $id = null)
    {
        if($action != 'create' && $action != 'update'){
            return redirect()->route('backend.course.index');
        }

        $params['action'] = $action;
        if ($id != null) {
            $params['course'] = Course::find($id);
            if ($params['course'] == null || auth()->user()->id != $params['course']->author_id) {
                return redirect()->back()->with('error', 'Kursus tidak ditemukan.');
            }
        }
        return view('backend.course.form', $params);
    }

    public function post_action(Request $request, $action, $id = null)
    {
        $params['action'] = $action;
        $course = null;
        if ($id != null) {
            $course = Course::find($id);
            if ($course == null || auth()->user()->id != $course->author_id) {
                return abort(404);
            }

            if($request->method == 'delete'){
                Helper::remove_image($course->image);
                $course->delete();
                return redirect()->route('backend.course.index')->with('success', 'Kursus berhasil dihapus.');
            }

            if($request->has('image')){
                $course->image = Helper::update_image($course->image, 'uploads/courses/images', $request->image);
            }
        } else {
            $course = new Course();
            $course->author_id = auth()->user()->id;
            $course->image = Helper::upload_image('uploads/courses/images', $request->image);
        }

        $course->price = $request->price;
        $course->title = $request->title;
        $course->status = $request->status;
        $course->content = $request->content;

        $bool = $action == 'create' ? $course->save() : $course->update();

        if ($bool) {
            return redirect()->route('backend.course.index')->with('success', 'Kursus berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Kursus gagal disimpan.');
        }
    }
}
