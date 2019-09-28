<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method, ML; 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-28
	* Update Date : 2018-01-01
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
			redirect(baseUrl('panel/member'));
		}


		function logout(){
	        Session::deleteAll();
	        redirect(URL::base());
	    }
	}