<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use App\Response;

class TopPageController extends Controller
{
  public function index() {
    $items = Thread::all();
    return view('top_page.index', ['items' => $items]);
  }

  public function new_thread_creation() {
    $thread = Thread::find($request->id);
    return view('new_thread_creation_form.create_thread', ['form' => $thread]);
  }

}
