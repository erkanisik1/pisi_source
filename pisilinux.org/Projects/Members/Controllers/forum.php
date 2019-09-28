<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method;	

	class Forum extends Controller	{

		function main(){
			$data['messages'] = $this->forum_model->messages();
			$data['mymessages'] = $this->forum_model->mymessages();
			import::view('forum/index',$data);
		}
		
		function edit($id){
			if (Method::post()) {$this->forum_model->update(Method::post());}
			$data['id'] = $id;
 			import::view('forum/edit',$data);
			
		}

			function message_edit($id){
			if (Method::post()) {
				$this->forum_model->update(Method::post());
			}
			$data['edit'] = $this->forum_model->edit($id);
			import::view('forum/message_edit',$data);
			
		}

		function delete($id){
			
			$forum = DB::where('id',$id)->get('forum')->row();
			if ($forum->content_id > 0) {
				$link = Url::base().'forum/konu/'.$forum->content_id.'-'.seo(forum_title($forum->content_id)->title);
			}else{
				$link = Url::base().'forum';
			} 
			
			DB::where('id',$id)->delete('forum');
			redirect($link);
			/*
			$forum = DB::where('id',$id)->get('forum')->row();
			$link = '/forum/konu/'.$forum->content_id.'-'.seo(forum_title($forum->content_id)->title);
			DB::where('id',$id)->delete('forum');
			redirect($link);
			*/
		}
	}