<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML; 

class Bugs extends Controller{
	
	function main()
	{
		import::view(THEMA_NAME.'bugs/index');
	}

	function new(){
		import::view(THEMA_NAME.'bugs/addtask');
		
	}

	function package(){
	echo APPDIR;
	}

	function search(){
		import::view(THEMA_NAME.'bugs/search');
	}

	function help(){
		import::view(THEMA_NAME.'bugs/help');
	}
}