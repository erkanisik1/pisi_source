<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method;
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2017-08-30
	* Update Date : 2018-12-31
 	*/
	class Wiki extends Controller{

		function main(){

			$data['yazilist'] = $this->wiki_model->liste();

			import::view('wiki/content_list',$data);
		}

		function edit($id){
			if (method::post()){$this->wiki_model->update(method::post());}

			$data['content'] = $this->wiki_model->edit($id);
			import::view('wiki/content_edit',$data);

		}

		function delete($id){
			//$imglink = DB::select('resim')->where('id',$id)->get('wiki')->value();
			//unlink(pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$imglink);
			
			DB::where('id', $id,'and')->where('editor',Session::select('userid'))->update('wiki',[
				'durum' => '0'
			]);
			if (DB::error()) {
				jalert(DB::error());
			}else{
				redirect('wiki');
			}
			
		}

		function new_wiki(){


			if (method::post()) {$this->wiki_model->yeni(method::post());}

			import::view('wiki/new_wiki_view');
		}


	}