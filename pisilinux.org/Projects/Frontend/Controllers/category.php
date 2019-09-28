<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
/**
* 
*/
class Category extends Controller{
	
	function main($id){
		$id = explode('-', $id);
		$data['id'] = $id['0'];
		import::view(THEMA_NAME.'blog/category_view',$data);
	}
}