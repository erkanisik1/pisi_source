<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
use Method; 
use FOLDER;
	/**

	* Created By: Osman Erkan

	* Created Date: 2017-09-10

	*/
class Setting extends Controller{

	function main()	{
		$data['settings'] = DB::where('ayar_id', '1')->get('settings')->row();
		import::view('content/setting_view',$data);
	}
	function setting(){
		if (method::post()) {
			$this->panel->setting_update(method::post());
		}
		import::view('content/setting');
	}
} 