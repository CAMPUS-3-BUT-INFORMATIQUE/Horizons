<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.layout');
    }

    public function questions(): View
    {
        return view('admin.questions.base');
    }
}
