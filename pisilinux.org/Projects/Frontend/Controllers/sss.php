<?php namespace Project\Controllers;

use DB, Import,URL, Cookie,Session,ML;
class Sss extends Controller
{
	public function main(){
		$data['liste'] = $this->sss_model->listele();
		Import::view(THEMA_NAME.'sss/index',$data);
	}

}