<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class Creator extends Controller
{
	function main(){


		if (Method::post()) {
			if (Method::post('controller') == '1') {
				$filename = Ucwords(Method::post('name'));
				$path = REAL_BASE_DIR.'/Projects/'.Method::post('section').'/Controllers/'.$filename.'.php';
				touch($path);
				$dosya=fopen($path,"a");
				$yazdir ="<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class $filename extends Controller{\n
	function main(){ \n";
	if (Method::post('section') == 'Frontend') {
		$yazdir .= "Import::view(THEMA_NAME.'$filename/$filename.view');}\n}";
	}else{
		$yazdir .= "Import::view('$filename.view');}\n}";
	}
					
			fwrite($dosya, $yazdir);
			}

			if (Method::post('models') == '1') {
				$filename = Ucwords(Method::post('name'));
				$path = REAL_BASE_DIR.'/Projects/'.Method::post('section').'/Models/'.$filename.'_model.php';
				touch($path);
			}
			if (Method::post('views') == '1') {
				# code...
			}
		}




		import::view('creator/index');
	}	
	
}

