<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class Page extends Controller{

	function main(){	
	$data['list'] = $this->page_model->page_list();	
		import::view('page/index',$data);
	}

	function sayfaekle(){
	if(method::post()){
		$this->page_model->newPage(method::post());
		}
		import::view('page/new');
	}
	function edit($id){

		if(method::post()){$this->page_model->pageUpdate(method::post());}

		$data['pages'] = DB::where('id',$id)->get('content')->row();
		
		import::view('page/page_edit',$data);
	}

	function delete($id){
		DB::where('id', $id)->update('content',['status'=>'0']);
		redirect(baseUrl('panel/page/index'));
	}

}// class sonu

