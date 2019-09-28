<?php 
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2018-02-15
	* Update Date : 2019-01-06
 	*/
class wiki_model extends Model{
	
	function liste(){
		return DB::orderBy('id','desc')->where('editor',Session::select('userid'))->get('wiki')->result();
	}

	function edit($id){
		return DB::where('id',$id)->get('wiki')->row();
	}

	function yeni($post){
		DB::insert('wiki',[
			'baslik' 		=> $post['title'] ,
			'baslik_seo'	=> seo($post['title']),
			'detay' 		=> $post['content'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['label'],
			'katid' 		=> $post['category'] ,
			'editor' 		=> Session::select('userid'),
			'hits'			=> '0'
		]);
		if (DB::error()) {jalert(DB::error());}else{redirect('wiki');}
	}


	function update($post){
		DB::where('id',$post['id'])->update('wiki',[			
			'baslik' 		=> $post['baslik'] ,
			'baslik_seo'	=> seo($post['baslik']),
			'detay' 		=> $post['yazi'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['label'],
			'durum' 		=> '0',
			'katid' 		=> $post['kategori'] ,
			'durum' 		=> $post['durum']
			
		]);

		if (DB::error()) {jalert(DB::error());}else{redirect('wiki');}
	}


}// class sonu