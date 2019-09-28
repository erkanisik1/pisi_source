<?php namespace Project\Controllers;
use Import;
use Url;

class Home extends Controller
{
	public function main(){

		
    	Import::view('index');
    	
	}
}