<?php namespace Project\Controllers;
use DB, Import,URL, Cookie, Session, ML; 

/*
* Created By  : Erkan IŞIK
* Created Date: 2017-12-05
* Update Date : 2018-12-31
*/

class Blog extends Controller{

	function main($id = null){
	
		if ($id) {
			$par = explode('-', $id);	
			if(is_numeric($par['0'])){
				$data['content'] =  $this->blog_model->content($id);
				define('title', ' '.$data['content']->title);
				define('keywords', ' '.$data['content']->keywords);
				define('desc', ' '.kelimebol($data['content']->content,200) );
				define('img', ' '.content_image($data['content']->content));

				define('TITLE', ' '.$data['content']->title_seo);
				DB::where('id',$par['0'])->update('content',['hits' => $data['content']->hits+1,]);
				import::view(THEMA_NAME.'blog/content_view',$data);
			}else{
				redirect('show404');
			}
			
		}else{
			define('TITLE', ' Blog');
			import::view(THEMA_NAME.'blog/index');}
		}


		function category($kat_id){
			$id = explode('-', $kat_id);
			$seo = explode('.', $id['1']);
			//$data['catlist'] = DB::where('icerik_katid',$id['0'])->get('content')->result();
			define('TITLE', ' '.$seo['0']);
			import::view(THEMA_NAME.'blog/category_view',$id);
		}

		function newslist($par){
			$id = explode('-', $par);
			$data['newslist'] = DB::where('icerik_katid',$id['0'])->get('content')->result();

			import::view(THEMA_NAME.'blog/newslist_view',$data);

		}


		
		
	}