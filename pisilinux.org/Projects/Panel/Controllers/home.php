<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class Home extends Controller
{	
    function main(){ 
        $data['mesaj'] = DB::get('iletisim')->result();
        Import::view('index',$data);
      
    }

    function login(){
        if (method::post()) {$this->login_model->userControl(method::post());}

        import::view('login'); 
    }

    function logout(){
        Session::deleteAll();
        redirect();
    }
	
}