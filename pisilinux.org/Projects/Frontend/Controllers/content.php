<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
/**
* Created By: Erkan IŞIK
* Created Date: 2017-05-09
* 
*/
class Content extends Controller{
	
	function main($p = ''){
		$p = explode('-', $p);


		$data['content'] = DB::where('icerik_id',$p[0])->get('content')->row();

		import::view(THEMA_NAME.'content_view',$data);
	}
}