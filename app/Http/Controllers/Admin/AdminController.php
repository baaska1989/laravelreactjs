<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Хяналтын самбар
    public function Dashboard(){
        return view('admin.index');
    }
}
