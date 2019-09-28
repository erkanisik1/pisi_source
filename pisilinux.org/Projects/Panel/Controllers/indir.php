<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
use Method; 
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2017-12-20
*/
	class Indir extends Controller{
		
		function main(){
			$data['list'] = DB::orderBy('id','desc')->get('download')->result();
			import::view('indir/index',$data);			
		}

		function yeni(){
			if (method::post()){$this->download_model->yeni(method::post());}
			import::view('indir/yeni');			
		}

		function edit($id){
			if (method::post()){$this->download_model->edit(method::post());}
			$data['edit'] = DB::where('id',$id)->get('download')->row();
			import::view('indir/edit',$data);			
		}
	}