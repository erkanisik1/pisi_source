<?php 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-09-05
	* Update  Date: 2018-08-25
	*/
	class Page_model extends model{

		function page_list(){
			return DB::orderBy('id','desc')->where('content_type','sayfa')->get('content')->result();
		}

		function newPage($post){
			DB::insert('content',[
				'title' => $post['title'] ,
				'title_seo' => seo($post['title']),
				'content' => $post['content'],
				'keywords' => $post['keywords'],
				'status' => $post['status'],
				'label' => $post['label'],
				'editor' => Session::select('userid'),
				'content_type' => 'sayfa'
			]);
			redirect('page');
			
		}
		


		function pageUpdate($post){
		
		
			DB::where('id',$post['id'])->update('content',[
				'title' => $post['title'] ,
				'title_seo' => seo($post['title']),
				'content' => $post['content'],
				'keywords' => $post['keywords'],
				'status' => $post['status'],
				'label' => $post['label'],
				'editor' => Session::select('userid'),
				'content_type' => 'sayfa'
			]);
			redirect('page');
			
		}
 
		

	}// class sonu