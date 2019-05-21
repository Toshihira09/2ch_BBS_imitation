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
    return view('thread_page.thread_page', ['form' => $thread]);
  }

  public function show_thread(Requesat $request){
    $this->validate($request, Thread::$rules);
    $thred = Thread::find($request->id);
    $form = $request->all();
    unset($form['_token']);
    $thread->fill($form)->save();
    return redirecet('/thread_page');
  }
}

