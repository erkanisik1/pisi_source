<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method, ML; 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2019-02-13
	* Update Date : 2019-02-14
	*/
	class User extends Controller{

		function main(){
			if (method::post()) {$this->login_model->update(method::post());}
			$data['profil'] = DB::where('user_id',Session::select('userid'))->get('user')->row();
			
			import::view('user/index',$data);
		}
		
		function passRename()
		{
			$data['message'] = null;
			if(method::post()){$data['message'] = $this->login_model->passrename(method::post());}
			import::view('user/passRename',$data);
		}

		function delete($id){
			DB::where('user_id', $id)->delete('user');
			redirect('user/list');
		}

		function list(){
			$ciftlik = DB::differentConnection('ciftlik');
			$data['ciftlik'] = $ciftlik->get('public.user')->result();
			$data['lists'] = DB::where('authority','1')->get('user')->result();
			import::view('user/list_view',$data);

		}


		function logout(){
	        Session::deleteAll();
	        redirect();
	    }

	    function login(){
	    	if (method::post()) {$this->user_model->logincheck(method::post());} 
			Import::view('user/login');
		}
	}