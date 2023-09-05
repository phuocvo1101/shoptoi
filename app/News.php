<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     protected $table = 'news';

    protected $fillable = ['name','alias','intro','content','image','keywords','user_id','description','cate_news_id'];

   // public $timestamps = false;

}
