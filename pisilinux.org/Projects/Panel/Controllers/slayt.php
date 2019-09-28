<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
use Method; 
/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-09-06
	*/
class Slayt extends Controller{
	// slayt ana fonksiyonu
	function main()
	{	
		$data['breadcrumb'] = 'Slayt';
		$data['slider_list'] = DB::orderBy('sira','asc')->get('slider')->result();
		$data['sira_max'] = DB::max('sira')->get('slider')->value();

		import::view('slayt/slayt_view',$data);
	}

	// slayt ekleme fonksiyonu
	function new_slider(){
		if(method::post()){$this->slider_model->new_slider_save(method::post());}
		import::view('slayt/new_slider');
	}
	
	// slayt sırasını bir yukarı alan fonksiyon
	function up($dt){
		$d = DB::select('sira')->where('id',$dt)->get('slider')->value();
		$r =  $d-1; //3 oldu surası 3 olanı 4 yapacağız
		DB::where('sira',$r)->update('slider',[
			'sira' => $r+1,
			]);

		DB::where('id',$dt)->update('slider',[
			'sira' => $r,
			]);
		redirect('panel/slayt');

	}

	// slayt sırasını bir aşağı alan fonksiyon
	function down($dt){
		$d = DB::select('sira')->where('id',$dt)->get('slider')->value();
		$r =  $d+1; //3 oldu surası 3 olanı 4 yapacağız
		DB::where('sira',$r)->update('slider',[
			'sira' => $r-1,
			]);

		DB::where('id',$dt)->update('slider',[
			'sira' => $r,
			]);
		redirect('panel/slayt');
	}
	// slaytı silen fonksiyon
	function delete($id){
		$this->slider_model->delete($id);		
	}

	function edit($id){
		if(method::post()){$this->slider_model->slider_update(method::post());}
		$data['edit'] = DB::where('id',$id)->get('slider')->row();
		import::view('slayt/edit_slider',$data);
	}
}