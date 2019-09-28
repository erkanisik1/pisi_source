<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML;
/*
* Created By  : Erkan IŞIK
* Created Date: 2017-12-24
* Update Date : 2018-02-15
*/
class Wiki extends Controller{


    function main(){
		$data['catlist'] = $this->wiki_model->catlist();
		import::view(THEMA_NAME.'wiki/index',$data);
    }


	function cat($kat_id){
		$id = explode('-',$kat_id);
		$data['wikikat'] = $this->wiki_model->wikikat($kat_id);

		$data['kategori_name'] = $id['0']; 
		import::view(THEMA_NAME.'wiki/wikilist_view',$data);
	}
 
	function cont($id){
		$data['content'] = $this->wiki_model->content($id);
		define('title', ' '.$data['content']->baslik);
		define('keywords', $data['content']->keywords);
		define('desc', kelimebol($data['content']->detay,200) );
		define('img', content_image($data['content']->detay));
		DB::where('id',$data['content']->id)->update('wiki',['hits' => $data['content']->hits+1,]);		
		import::view(THEMA_NAME.'wiki/content_view',$data);
	} 


   
}
?>
