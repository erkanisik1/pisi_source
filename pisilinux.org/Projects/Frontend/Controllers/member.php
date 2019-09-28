<?php namespace Project\Controllers;
use DB,Import,URL,Cookie,Session,ML, Method,Email;

/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-06
* Update Date : 2018-11-24
* 
*/


class Member extends Controller{

	
	
	function main(){
		if(Method::post()) {$this->user_model->logincheck(Method::post());} 
		Import::view(THEMA_NAME.'member/index');
	}

	function register(){

		if (method::post()) {
			$res = method::post('g-recaptcha-response');
			if (!isset($res) || empty($res)){
				jalert('Ben robot değilimi tıklamak zorundasınız');
			}else{
				$goo = reCaptcha($res);
				if ($goo['success'] == 1) {
					$this->user_model->yeniuye(method::post());	
				}else{
					jalert('Sadece insanlar kayıt olabilir :)');
				}
			}
		}
		



		import::view(THEMA_NAME.'member/register');
		
	} 

	function aktivizasyon($act){
		DB::where('aktivizasyon',$act)->update('user',[
			'aktivizasyon' => '',
			'status' => '1',
		]);
		if (DB::affectedRows()) {

			import::view(THEMA_NAME.'member/basarili');
		}
	}

	function password_forgot(){
		if (method::post()) {$this->user_model->sifremiunuttum_model(method::post());}
		import::view(THEMA_NAME.'member/sifremiunuttum_view');
	}

	function ref($data){

		$exp = explode('-', $data);
		$ref = $exp['0'].'/'.$exp['1'].'/'.$exp['2'].'-'.seo($exp['3']);
		Session::insert('ref', $ref);

		if(method::post()) {$this->user_model->logincheck(method::post());} 
		import::view(THEMA_NAME.'member/index');

	}

	function yenisifre($act){

		if (method::post()) {$this->user_model->yenisifre(method::post());}
		
		$data['id'] = DB::select('user_id')->where('aktivizasyon',$act)->get('user')->value();
		$data['act'] = $act;
		import::view(THEMA_NAME.'member/yenisifre_view',$data);
		
	}

	function logout(){
		Session::deleteAll();
		cookie::deleteAll();
		redirect(URL::base());
	}
}