<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use App\Response;

class ResponseController extends Controller
{
  public function to_response_creation_form(Request $request){
    $thread = Thread::find($request->id);
    $response = Response::find($request);
    dump($thread->all());
    dump($thread->id);
    dump($thread);
    dump($response);
    return view('response_creation_form.response_creation_form', ['thread' => $thread]);
  }


  public function create(Request $request){
    //$this->validate($request, Response::$rules);
    //response = new Response();
    //form = $request->all();
    //nset($form['_token']);
    //response->fill($form)->save();
    $thread = Thread::find($request->id);
  //  dump($request->all());
  // dump($request->id);
    dump($request->get('content',[]));
  // dump($thread);
  // dump($thread->responses());
    dump($request->id);
    dump($thread->responses()->create(['content' => $request->get('content',[])]));
    $thread->responses()->create(['content' => $request->get('content',[])]);
    return redirect('/thread/{$request->id}', ['thread' => $request]);
  }
    //
}
