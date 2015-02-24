<?php

class Size extends \Eloquent {
	protected $fillable = [];

	protected $table = 'sizes';

	public function SizeCheck($size){
		return Producer::where('id', $this->id)->pluck($size);
	}
}