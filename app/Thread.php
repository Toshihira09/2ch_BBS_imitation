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

  public function getData()
  {
    $response_number = $this->responses()->count();
    if ($response_number == 0)
      $updated_at = $this-> last_responses_date;
    else
      $updated_at = Response::where('Thread_id', $this->id)->pluck('updated_at')->last();
    return 'ID: ' . $this -> id . 'タイトル: ' . $this -> title . ' 作成日時:' . $this -> created_at. ' 最終更新日:' . $updated_at
      . ' 内容:' . $this -> content . ' レス数:' . $response_number;
  }

}
