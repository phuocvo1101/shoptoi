<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','alias','price','intro','content','spmoi','spkhuyenmai','spbanchay','image','keywords','description','user_id','cate_id'];

   // public $timestamps = false;

    public function cate () {
    	return $this->belongTo('App\Cate');
    }

    public function user () {
    	return $this->belongTo('App\User');
    }

    public function pImages () {
    	return $this->hasMany('App\ProductImage');
    }
}
