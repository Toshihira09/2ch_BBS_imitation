<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  //protected $guarded = array('id');
  protected $fillable = [
    'content'
  ];

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  public static $rules = array(
     //'content' => 'required'
   );

  public function getTime()
  {
    return array($this-> created_at, $this-> updated_at);
  }

  public function threads()
  {
    return $this->belongTo('App\Thread');
  }

  public function getData()
  {
    $time = $this->getTime();
    $_created_at = $time[0];
    $_updated_at = $time[1];
    if ($time[0] == $time[1]){
      return $this-> content . ' 作成日時:' . $time[0];
    } else {
      return $this-> content . ' 編集日時:' . $time[1];
    }
  }

    //
}
