<?php

class Imager extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['product_id', 'name', 'location'];

	protected $table = 'imagers';


}