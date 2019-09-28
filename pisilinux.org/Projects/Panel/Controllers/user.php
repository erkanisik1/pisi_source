<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-28
	*/
	class User extends Controller{

		function main(){
			
			echo 'Üyeler burda olacak';
		}
		
		function passRename()
		{
			$data['message'] = null;
			if(method::post()){
				$data['message'] = $this->login->passrename(method::post());
			}

			import::view('user/passRename',$data);
		}

		function delete($id){
			DB::where('user_id',$id)->delete('user');
			redirect('member');
		}
	}