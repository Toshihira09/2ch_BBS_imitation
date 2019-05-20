<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
  public function index(Request $request)
  {
    $items = Thread::all();
    return view('top_page.index', ['items' => $items]);
  }

  public function create(Request $request)
  {
    $this->validate($request, Thread::$rules);
    $thread = new Thread;
    $form = $request->all();
    unset($form['_token']);
    $thread->fill($form)->save();
    return redirect('/top_page');
  }
}

