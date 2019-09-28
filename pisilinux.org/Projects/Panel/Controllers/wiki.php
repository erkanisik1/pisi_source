<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-27
* Update Date : 2019-01-06
*/
class Wiki extends Controller{
	
	
		function main(){
			$data['yazilist'] = $this->wiki_model->content_list();

			import::view('wiki/content_list',$data);
		}

		function edit($id){
			if (method::post()) {$this->wiki_model->wiki_update(method::post());}
			$data['edit'] = $this->wiki_model->edit($id);
			import::view('wiki/wiki_edit',$data);
		}

		function delete($id){

			DB::where('id', $id)->update('wiki',['durum'=>'0']);
			redirect('wiki');
		}

		function new_content(){
			if (method::post()) {$this->wiki_model->new_content_save(method::post());
			}
			import::view('wiki/new_content'); 
		}


		function kategori(){
			$data['katList'] = DB::where('kat_ustid','30')->get('wiki_kat')->result();
			import::view('wiki/wiki_kat_list',$data);
		}

		function new_category(){
			if (method::post()) {$this->wikiModel->new_category_save(method::post());}
			import::view('wiki/new_category');
		}


}