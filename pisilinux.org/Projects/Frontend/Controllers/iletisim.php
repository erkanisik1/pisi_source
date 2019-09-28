<?php namespace Project\Controllers;
use DB,Import,URL,Cookie,Session,ML,Method,Email;
/*
* Created By: Erkan IŞIK
* Created Date: 2017-05-09
* Update Date: 2018-02-19
*/

class Iletisim extends Controller{


    function main(){
        $email = strtolower(trim(method::post('email')));
            $mesaj = '
            Mesajı Gönderen: '.method::post('name').'<br>
            Mail Adresi: '.$email.'<br>
            Mesaj: '.method::post('message');


       

        if(method::post()){
/*
            Email::sender('form@pisilinux.org', 'Pisilinux İletişim')
            ->receiver('info@pisilinux.org')
            ->subject(method::post('name').' mesajı var')
            ->message($mesaj)
            ->send();
      
                
                DB::insert('iletisim',[
                    'isim'      => method::post('name'),
                    'email'     => $email,
                    'mesaj'     => method::post('message'),
                    'date'      => method::post('currentDate'),
                    'durum'     => '1',
                    'cevap'     => '0',
                    'senddate'  => '0000-00-00',
                    'yazan'     => '66'
                ]);
*/
     
                $message = "Mesajın geldiği yer: İletişim\nGönderen: ".Method::post('name')."\nE-Mail Adresi:".$email."\nMesaj: ".method::post('message');
                //gitter($message);
                telegram($message);
                jalert('Mesajınız başarıyla gönderildi.\nEn kısa sürede sizinle iletişime geçilecektir.'); 
                git();
          
        }

    	import::view(THEMA_NAME.'iletisim');
   
    }
} // class sonu
