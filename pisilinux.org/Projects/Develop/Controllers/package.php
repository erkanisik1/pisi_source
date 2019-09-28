<?php namespace Project\Controllers;
use Import, Url, DB, Method;


class Package extends Controller{
	
	function main(){
		$ciftlik = DB::differentConnection('ciftlik');
		$data['lists'] = $ciftlik->limit('300')->get('public.paket')->result();
		import::view('package/index_view',$data);
	}
}