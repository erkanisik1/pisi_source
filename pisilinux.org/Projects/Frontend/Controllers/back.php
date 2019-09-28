<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 

/**
 * 
 */
class Back extends Controller{

	
	function main(){

		//$xml_link = 'https://ciftlik.pisilinux.org/2.0-Beta.1/pisi-index.xml.xz';
		//$link = 'https://ciftlik.pisilinux.org/2.0-Beta.1';
		
		$list = ftp::files('/2.0-Beta.1/a/');
		output($list);
		/*
		foreach ($list as $key) {
			$par = explode('/', $key);

			//$link = '/'.$par['2'].'/'.$par['3'];

			echo '<a href="/back/dizin/'.$par['3'].'">'.$par['3'].'</a><br>';
			

			 //echo $par['2'].'<br>';
		
		}
		*/

	}

	function dizin($f){
		$list = ftp::files('/2.0-Beta.1/');
		
		foreach ($list as $key) {
			$par = explode('/', $key);
			echo '<a href="/back/dizin/'.$par['2'].'">'.$par['2'].'</a><br>';
			

			 //echo $par['2'].'<br>';
		
		}
	}
}