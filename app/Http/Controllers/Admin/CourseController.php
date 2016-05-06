<?php

namespace App\Http\Controllers\Admin;

use App\models\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){
        $data['page_title'] = 'Courses';
        $data['courses'] = Course::all();

        return view('admin.course.index',$data);
    }

    public function level(){
        $data['page_title'] = 'Levels';
        $data['levels'] = Level::all();

        return view('admin.course.level',$data);
    }

    public function specialization(){
        $data['page_title'] = 'Levels';
        $data['specializations'] = Specialization::all();

        return view('admin.course.level',$data);
    }

    public function subject(){
        $data['page_title'] = 'Levels';
        $data['subjects'] = Subject::all();

        return view('admin.course.level',$data);
    }
}
