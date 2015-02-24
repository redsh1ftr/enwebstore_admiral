<?php

class ProductCat extends \Eloquent {

	// Add your validation rules here
	public static $rules = [

	];

	protected $fillable = ['name'];

	protected $table = 'productCats';
}