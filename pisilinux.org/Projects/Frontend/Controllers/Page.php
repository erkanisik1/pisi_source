<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-24
* Update Date : 2017-12-24
* 
*/

class Page extends Controller{
	
	function main($p = ''){
		$p = explode('-', $p);
		$data['content'] = DB::where('id',$p[0])->get('content')->row();
		
		import::view(THEMA_NAME.'page_view',$data);
	}
}