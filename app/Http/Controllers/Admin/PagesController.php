<?php

namespace App\Http\Controllers\Admin;

use App\models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index(){
        $data['page_title'] = 'Static Pages';
        $data['pages'] = Page::all();
        return view('admin.pages.index', $data);
    }

    public function addPage(){
        $data['page_title'] = 'Add New Page';
        return view('admin.pages.add-new', $data);
    }
}
