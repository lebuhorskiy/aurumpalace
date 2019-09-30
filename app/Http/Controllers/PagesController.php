<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PagesController extends Controller
{
    public function index() {
        $pages = Page::all();
        return view('aurum.adminLTE.pages', compact('pages'));

    }
}
