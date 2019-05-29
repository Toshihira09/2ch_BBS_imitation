<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use App\Response;

class ThreadController extends Controller
{
  public function create(Request $request)
  {
    $this->validate($request, Thread::$rules);
    $thread = new Thread;
    $form = $request->all();
    unset($form['_token']);
    $thread->fill($form)->save();
    return redirect('/top_page');
  }

  public function thread(Request $request) {
    $thread = Thread::find($request->id);
    $responses = Thread::find($request->id)->responses;
    return view('thread_page.thread_page', [ 'responses' => $responses, 'thread' => $thread]);
  }

}

