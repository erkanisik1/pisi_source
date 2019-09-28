<?php 
		/**
	* Created By   : Erkan IŞIK
	* Created Date : 2018-02-13
	* Update Date  : 2019-02-27
	*/
	class Kategori_model extends Model{
		
		function new_category_save($post){
			$adi_seo = seo($post['kategori']);
			DB::insert('kategoriler',[
				'adi' 		=> $post['kategori'],
				'adi_seo' 	=> $adi_seo,
				'aciklama' 	=> $post['aciklama'],
				'kat_ustid' => $post['ustkategori'],
				'img'		=> NULL
				]);
			if (DB::error()){echo DB::error();}else{redirect('category');}
		}

		function update_save($post){
			
			if ($_FILES['img']) {
				unlink($post['imgsil']);		
			Upload::settings([
			    'encode'     => false,
			    'prefix'     => '_cat-',
			    'extensions' => 'jpg|png|gif|jpeg',
			   ])->target('upload/')->start('img');

			DB::where('id',$post['id'])->update('kategoriler',[
				'adi' 		=> $post['kategori'],
				'adi_seo' 	=> seo($post['kategori']),
				'aciklama' 	=> $post['aciklama'],
				'kat_ustid' => $post['ustkategori'],
				'img'		=> Upload::info()->path
				]);
			}else{
				DB::where('id',$post['id'])->update('kategoriler',[
				'adi' 		=> $post['kategori'],
				'adi_seo' 	=> seo($post['kategori']),
				'aciklama' 	=> $post['aciklama'],
				'kat_ustid' => $post['ustkategori'],
				]);
			}
			
			

			
			
			if (DB::affectedRows()) {redirect('panel/category');}
			
		}

		function edit($post){
			return DB::where('id',$post)->get('kategoriler')->row();
		}


	}

