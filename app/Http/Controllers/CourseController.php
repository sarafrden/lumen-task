<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function showAllCourses()
    {
        return response()->json(Course::all());
    }

    public function showOneCourse($id)
    {
        return response()->json(Course::find($id));
    }

    public function create(Request $request)
    {
        $Course = Course::create($request->all());

        return response()->json($Course, 201);
    }

    public function update($id, Request $request)
    {
        $Course = Course::findOrFail($id);
        $Course->update($request->all());

        return response()->json($Course, 200);
    }

    public function delete($id)
    {
        Course::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
