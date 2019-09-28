<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method; 

	/**
	* Created By   : Erkan IŞIK
	* Created Date : 2017-09-05
	* Update Date  : 2018-02-13
	*/
class Category extends Controller{
	
	function main()
	{
		import::view('category/category_list_view');
	}

	function new_category(){
		if (method::post()) {$this->kategori_model->new_category_save(method::post());}
		import::view('category/category_new_view');	
	}

	function edit($id){
		if (method::post()) {$this->kategori_model->update_save(method::post());}

		$data['edit'] = $this->kategori_model->edit($id);
		$data['ustkatid'] = $data['edit']->kat_ustid;

		import::view('category/edit_view',$data);	
	}

	function delete($id){
		DB::where('id', $id)->delete('kategoriler');
		redirect(baseUrl('panel/category'));
	}
}