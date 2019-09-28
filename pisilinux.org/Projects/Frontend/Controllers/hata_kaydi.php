<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML;
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-24
* Update Date: 2018-07-24
*/
class Hata_kaydi extends Controller{
function __construct(){
		Cookie::insert('return','bugs');
	}


    public function main(){
import::view(THEMA_NAME.'hata_kaydi/index');

    }

   
}
?>
