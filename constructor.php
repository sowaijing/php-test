<?php

class Product{
	public $title,
		   $author,
		   $publisher,
		   $price;

	public function_construct ($title = "title",$author = "author",
$publisher = "publisher", $price = 0）{
	this.title = $title;
	this.author = $author;
	this.publisher = $pubisher;
	this.price = $price;
}

public function getLable(){
	return "$this.title, $this.publiser";
}
}