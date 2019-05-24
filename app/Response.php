<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  protected $guarded = array('id');

  const CREATED_AT = 'created_at';
  const UPDATED_AT = null;

  public static $rules = array(
     'content' => 'required'
   );

  public function threads()
  {
    return $this->belongTo('App\Thread');
  }

  public function getData()
  {
    return 'ID: ' . $this-> id . ': ' . $this-> content . ' 作成日時:' . $this-> created_at;
  }
    //
}
