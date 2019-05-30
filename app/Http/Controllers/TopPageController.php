<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use App\Response;

class TopPageController extends Controller
{
  public function index(Request $request) {
    $threads = Thread::simplePaginate(10);
    //$threads = Thread::all();
    //$data = Thread::paginate(10);
    return view('top_page.index', ['threads' => $threads]);
  }

  public function newThreadCreation() {
    return view('new_thread_creation_form.create_thread');
  }

}
