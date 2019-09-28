<?php namespace Project\Controllers;
use DB, Import,URL, Cookie,Session,ML;
class Home extends Controller
{
	public function main(){

		$data['sldr'] = DB::where('durum','1')->orderBy('sira','asc')->get('slider')->result();
    	$data['content'] = DB::orderBy('id','desc')->where('content_type','icerik','and')->where('status','1')->limit('3')->get('content')->result();
    	
		if (LANG=='tr') {
    	Import::view(THEMA_NAME.'index',$data);
    	}else{
    		Import::view(THEMA_NAME.'index_en',$data);
    	}
	}
}