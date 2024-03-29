<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
  protected $guarded = array('id');

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'last_responses_date';

  public static $rules = array(
     'title' => 'required',
     'responses_number' => 'integer'
   );

  public function responses()
  {
    return $this->hasMany('App\Response');
  }

  public function getResponseCount()
  {
    return $response_number = $this->responses->count();
  }

  public function getThreadApdatedAt()
  {
    $thread_time = $this-> last_responses_date;
    $response_time = Response::where('thread_id', $this->id)->pluck('updated_at')->sort()->last();
    if ($thread_time > $response_time)
      return $thread_time;
    else
      return $response_time;
  }

  public function getData()
  {
    return 'ID: ' . $this -> id . 'タイトル: ' . $this -> title . ' 作成日時:' . $this -> created_at. ' 最終更新日:' . $this->getThreadApdatedAt()
      . ' 内容:' . $this -> content . ' レス数:' . $this->getResponseCount();
  }

}
