<?php 

/**
* 
*/
class Forum_model extends Model{
	
	function cat_insert($post){
		$adi_seo = seo($post['adi']);

		return DB::insert('forum_kat',[
			'adi' 		=> $post['adi'],
			'adi_seo' 	=> $adi_seo,
			'aciklama' 	=> $post['aciklama'],
			'kat_ustid' => $post['kat_ustid']
		]);
		hataVarmi('panel/forum'); 
	}

	function katlist(){return DB::where('kat_ustid','0')->get('forum_kat')->result();}

	function kat_edit($post){
		return DB::where('id',$post)->get('forum_kat')->row();
	}

	function cat_update($post){
		$adi_seo = seo($post['adi']);

		return DB::where('id',$post['id'])->update('forum_kat',[
			'adi' 		=> $post['adi'],
			'adi_seo' 	=> $adi_seo,
			'aciklama' 	=> $post['aciklama'],
			'kat_ustid' => $post['kat_ustid']
		]);
		if (DB::affectedRows()) {
			redirect(baseUrl('panel/forum'));
		}
		 
	}

}