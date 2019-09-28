<?php 

/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-10
* Update Date: 2018-02-14
*/
class Menu_model extends Model{
	
	function menuname_save($post)
	{
		DB::insert('menuname',[
			'menuAdi' => $post['menuname'],
			'menuSeo' => seo($post['menuname']),
		]);

		redirect('panel/menu');
	}

	function menusave($post){

		$d = explode('&',$post['menu_adi']);
		$link ='';
		
		if (!empty($post['link'])) {
			$link = $post['link'];
		}else{
			$link = $post['link1'];
		}

		DB::insert('menu',[
			'ustmenuid' => $d['0'],
			'menu_adi' => $d['1'],
			'menuSeo' => seo($post['baslik']),
			'title' => $post['baslik'],
			'link' => $link,
		]);

		//hataVarmi('panel/menu');
	}
}