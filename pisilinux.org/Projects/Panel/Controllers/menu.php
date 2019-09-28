<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
use Method; 
/*
* Created By	: Erkan IŞIK
* Created Date 	: 09-12-2017
* Update Date 	: 29-12-2017
*/
class Menu extends Controller{

	function main(){

		if (method::post('islem') == '1') {$this->menu_model->menuname_save(method::post());}
		if (method::post('islem') == '2') {$this->menu_model->menusave(method::post());}

		$data['yazilar'] 		= DB::where('icerik_tur','icerik')->get('content')->result();
		$data['sayfalar'] 		= DB::where('icerik_tur','sayfa')->get('content')->result();
		$data['kategoriler'] 	= DB::get('kategoriler')->result();
		$data['menu'] 			= DB::select('menuAdi,id')->get('menuname')->result();
		$data['menulist'] 		= DB::get('menu')->result();
		import::view('menu/index',$data);			
	}
}