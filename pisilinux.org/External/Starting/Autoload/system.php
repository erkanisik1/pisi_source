<?php 


function view($deg = ''){
	return import::view($deg);
}
function selected($id1, $id2){if ($id1 == $id2){echo 'selected';}}


function category(){
	return DB::where('kat_ustid',0)->get('kategoriler')->result();
}

function blog($id=null){

	if ($id) {
		return DB::orderBy('id','desc')->where('content_type','icerik','and')->where('status','1','and')->where('category_id',$id)->get('content')->result();
	}else{
		return DB::orderBy('id','desc')->where('content_type','icerik','and')->where('status','1')->get('content')->result();
	}
	
}

function theme_list(){
	return Folder::files('Projects/Frontend/Views/');
}

function page_list(){
	return DB::where('content_type','sayfa')->get('content')->result();
}

function content_list(){
	return DB::orderBy('id','desc')->where('content_type','icerik')->get('content')->result();
}

function user_content_list($editor){
	return DB::orderBy('id','desc')->where('content_type','icerik','and')->where('editor',$editor)->get('content')->result();
}

function page_edit($id){
	return DB::where('id',$id)->get('content')->row();
}

function content_edit($id){
	return DB::where('id',$id)->get('content')->row();
}

function decode($deger){ echo htmlspecialchars_decode($deger);}//decode
function decode1($deger){ return htmlspecialchars_decode($deger);}//decode
/*
function slack_message($message){
  $message = array('payload' => json_encode(array('text' => $message)));
  $c = curl_init(SLACK_WEBHOOK);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, $message);
  curl_exec($c);
  curl_close($c);
}

function slack_invite($usermail){				
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://slack.com/api/users.admin.invite?C02NPT4MB");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.$usermail.'&token=xoxp-2771922705-2834958271-429249401667-ade5482f00f7fa2722526a1354d3b1f9');
	curl_setopt($ch ,CURLOPT_RETURNTRANSFER , True);
		$replyRaw = curl_exec($ch);
		/*
		  $reply=json_decode($replyRaw,true);
	          
	            if($reply['error']=='invalid_email') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'E-mail Adresini yazmayı unuttun!';
	                    echo '</p>';                                                    
                        }
                        elseif($reply['error']=='already_in_team') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Pisi Slack Kanalına Zaten Üyesin! <a class="pure-button pure-button-primary" href=https://pisi.slack.com>Pisi Slack Kanalına Git.</a>';
	                    echo '</p>';                                                    
                        }
                     elseif($reply['error']=='already_invited') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Daha önce kayıt olmuşsunuz! Lütfen Kayıt olduğunuz e-posta ile  <a class="pure-button pure-button-primary" href=https://pisi.slack.com>Pisi Slack Kanalına Giriş yapın.</a>';
	                    echo '</p>';                                                    
                        }    
	            
	            elseif($reply['ok']==false) {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Hata Oluştu, Tekrar Deneyin!';
	                    echo '</p>';
	                } else
	                {
	                
	                echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Başarıyla Üye oldunuz. <b color=white>'.$newmail.'</b> Adresinde Davet için Mail Gönderdik. Lütfen E-mailinizi kontrol ediniz.';
	                    echo '</p>';
	                
	                
	                }
	              
}
	function gitter($message){	
		$message = urlencode($message);
		$ch = curl_init('https://webhooks.gitter.im/e/fbf2cac6623ba8a4ab13');
		curl_setopt ($ch, CURLOPT_POSTFIELDS,"message=$message");
		curl_exec($ch);
		curl_close($ch);
	}

*/
function telegram($messaggio) {
    echo "Mesaj Gönderiliyor.. -1001464176086\n";

    $url = "https://api.telegram.org/bot889222363:AAF-kRBifC2lt9Yvv6mUqEuu1h0f7vIYhhA/sendMessage?chat_id=-1001464176086";
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

function translate($data){echo ML::select($data);}

function loginControl($deg='Panel'){
	if(!Session::select('login')){
		redirect(URL::base().$deg.'/home/login');
	}
}

function reCaptcha($response){
	$fileds = [
		'secret' 	=> "6Lc2qXwUAAAAAGfGK29-85EpV72saCoGwDUvwJv2",
		'response' 	=> $response
	];

	$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt_array($ch, [
		CURLOPT_POST 			=> true,
		CURLOPT_POSTFIELDS 		=> http_build_query($fileds),
		CURLOPT_RETURNTRANSFER 	=> true
	]);

	$result = curl_exec($ch);
	curl_close($ch);
	return json_decode($result,true);
}

function member_role($id){
	return DB::select('authority')->where('id',$id)->get('authority')->value();
	
}

function authority_list(){
	return DB::get('authority')->result();
}
/* 06-01-2019 tarihinde eklendi */
function wiki_category_name($id){
	return DB::select('adi')->where('id',$id)->get('wiki_kat')->value();
}

function category_name($id){
	return DB::select('adi')->where('id',$id)->get('kategoriler')->value();
}