<?php 
/**
* 
*/
class Post extends Eloquent{
	
	public function client(){
	 	return $this->belongsTo('Client');
	}
	public function product(){
	 	return $this->belongsToMany('Product');
	}
}