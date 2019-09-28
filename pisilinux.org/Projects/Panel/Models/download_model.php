<?php 
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2018-04-26
*/
class Download_model extends Model
{
	
	function yeni($post){
		DB::insert('download',[
			'baslik' 	=> $post['baslik'],
			'aciklama' 	=> $post['yazi'],
			'link' 		=> $post['link'],
			'md5sum' 	=> $post['md5sum'],
			'sha1sum' 	=> $post['sha1sum'],
			'surum'		=> $post['surum']
		]);
		if (DB::affectedRows()) {
			redirect(baseUrl('panel/indir'));
		}else{
			echo DB::error();
		}
	}

	function edit($post){

		DB::where('id',$post['id'])->update('download',[
			'baslik' 	=> $post['baslik'],
			'aciklama' 	=> $post['yazi'],
			'link' 		=> $post['link'],
			'md5sum' 	=> $post['md5sum'],
			'sha1sum'	=> $post['sha1sum'],
			'surum'		=> $post['surum']
		]);
		if (DB::affectedRows()) {
			redirect(baseUrl('panel/indir'));
		}
	}

}