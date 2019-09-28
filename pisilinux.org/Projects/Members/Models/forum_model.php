<?php 


class Forum_model extends model{
	
	function edit($data){return DB::where('id',$data)->get('forum')->row();}

	function update($post){
		DB::where('id',$post['id'])->update('forum',[			
			'content' => $post['content'],
		]);
		
		if (DB::affectedRows()) {redirect($post['link']);}
	}

	function messages(){return DB::orderBy('id','desc')->where('user_id',Session::select('userid'),'and')->where('content_id','0')->get('forum')->result();}

	function mymessages(){return DB::orderBy('id','desc')->where('user_id',Session::select('userid'),'and')->whereNot('content_id','0')->get('forum')->result();}

}