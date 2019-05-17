<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopPageController extends Controller
{
  public function index() {
    return view('top_page.index');
  }

  public function new_thread_creation() {
    return view('new_thread_creation_form.create_thread');
  }
}
