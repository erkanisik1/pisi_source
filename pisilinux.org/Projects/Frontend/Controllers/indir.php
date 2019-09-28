<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 

/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2017-12-07
*/
	class Indir extends Controller{
		
		function main(){

			$data['liste'] = DB::orderBy('id','desc')->get('download')->result();

			import::view(THEMA_NAME.'indir/index',$data);

			}
	}