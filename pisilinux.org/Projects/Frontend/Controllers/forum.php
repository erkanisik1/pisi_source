<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method;

/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-05
* Update Date: 2018-01-22
*/
class Forum extends Controller{

	function __construct(){
		Session::insert('return','forum');
	}

	function main()
	{
		
				//$data['forum_list'] = $this->forum_model->kategori();
		//import::view(THEMA_NAME.'forum/index');


		define('TITLE', ' Forum');

		$data['sonmesajlar'] = DB::orderBy('id','desc')->limit('5')->get('forum')->result();

		import::view(THEMA_NAME.'forum/index1',$data);
	}

	function forum1(){
		import::view(THEMA_NAME.'forum/forum_index');
	}

	function konulist($post){

		$par = explode('-',$post);

		$data['konular'] = DB::where('category_id',$par['0'])->get('forum')->result();

		$data['kategori'] = $par['0'];
		define('TITLE', ' '.forum_kategori_adi($data['kategori']));
		import::view(THEMA_NAME.'forum/konulist',$data);
	}

	function forums($id){
		$id_ext = explode('-', $id);
		$data['konular'] = DB::orderBy('id','asc')->where('category_id',$id_ext['0'],'and')->where('content_id','0')->get('forum')->result();
		$data['kategori'] = $id_ext['0'];
		define('TITLE', ' '.forum_kategori_adi($data['kategori']));
		import::view(THEMA_NAME.'forum/konulist',$data);
	}


	function yenikonu(){
		
		//$data['id'] = $id;
		
		if (method::post()) {$this->forum_model->konu_kaydet(method::post());}
		import::view(THEMA_NAME.'forum/yenikonu');
	}

	function konu($id){

		$par = explode('-',$id);
		if (method::post()) {$this->forum_model->cevap(method::post());}

		$data['fk'] = $this->forum_model->forumkonu($par['0']);
		define('TITLE', ' '.$data['fk']->title_seo);
		
		session::insert('return','forum/konu/'.$data['fk']->id.'-'.$data['fk']->title_seo);

		$hits = DB::select('view')->where('id',$par[0])->get('forum')->value();

		$hit = $hits + 1;
		DB::where('id',$par[0])->update('forum',['view' => $hit]);

		if (!DB::affectedRows()) {
			echo DB::error();
		}

		import::view(THEMA_NAME.'forum/konu',$data);
	}

	function konu_duzenle($id){
		if (method::post()) {$this->forum_model->Update(method::post());}
		$data['dzn'] = $this->forum_model->edit($id);

		import::view(THEMA_NAME.'forum/konu_duzenle',$data);
	}

	function cevapsil($id){
		
	}

	function kategori($id){
		$par = explode('-',$id);
		define('TITLE', ' Forum/kategori');
		$data['id'] = $par['0'];
		import::view(THEMA_NAME.'forum/category',$data);
	}





}		