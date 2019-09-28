<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class Sss extends Controller
{
	
	function main(){
		$data['liste'] = $this->sss_model->liste();
		import::view('sss/index',$data);
	}

	function new(){
		if (method::post()) {$this->sss_model->new(method::post());}
		import::view('sss/new');
	}

	function delete($id){
		DB::where('id',$id)->delete('sss');
		redirect('sss');
	}

	function edit($id){
		if (method::post()) {$this->sss_model->update(method::post());}
		$data['edit'] = $this->sss_model->edit($id);
		import::view('sss/edit',$data);
	}

}