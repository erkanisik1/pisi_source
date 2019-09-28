<?php 
/**
* Created By  : Erkan IŞIK
* Created Date: 2018-02-21
* Update Date : 2018-03-30
*/

function forum_kategori($par = '0'){
    return DB::where('kat_ustid',$par,'and')->where('status','1')->get('forum_kat')->result();
}

function forum_kategori_panel($par = '0'){
    return DB::where('kat_ustid',$par)->get('forum_kat')->result();
}

function mesaj_sayisi($id){
   	return DB::where('category_id',$id,'and')->where('content_id','0')->forum()->totalRows();
}

function question_category($par = '0'){
    return DB::where('status','1')->get('forum_kat')->result();
}

function forum_kategori_adi($data){
    return DB::select('adi')->where('id',$data)->get('forum_kat')->value();
}

function forum_kategori_row($data){
    return DB::where('id',$data)->get('forum_kat')->row();
}

function iletisayisi($id){
	$s = DB::where('category_id',$id)->get('forum')->result();
	return count($s);
}

function yazar($deg){
	return DB::select('username')->where('user_id',$deg)->get('user')->value();
}

function avatar($deg){
	return DB::select('avatar')->where('user_id',$deg)->get('user')->value();
	
}

function cevaplist($deg){
	return DB::where('content_id',$deg)->orderBy('id','asc')->get('forum')->result();
}

function contentlist($d){
	return DB::where('content_id',$d)->count('id')->get('forum')->value();
}

function forum_content($d = '0'){
	return DB::orderBy('id','desc')->where('content_id',$d,'and')->where('status','1')->get('forum')->result();
}

function forum_content_row($d = '0'){
	return DB::where('id',$d,'and')
	->where('status','1')
	->get('forum')
	->row();
}

function forum_category($d = '0'){
	return DB::orderBy('id','desc')->where('category_id',$d)->get('forum')->result();
}

function sonileti($d){
	return DB::select('content')->where('content_id',$d)->orderBy('id','desc')->limit('1')->get('forum')->value();
}

function message_count($d){
	$s = DB::where('category_id',$d)->get('forum')->result();
	foreach ($s as $key) {
		$a = DB::where('content_id',$key->id)->get('forum')->result();
echo count($a)+1;		
	}
	$say1 = count($s);
	
	//return count($b);
}
function soniletiler($limit = 10){
	return DB::orderBy('id','desc')->limit($limit)->get('forum')->result();
}

function forum_title($id='0'){
	return DB::select('title')->where('id',$id)->get('forum')->row();
}

function forum_kat(){
	return DB::where('kat_ustid',0)->get('forum_kat')->result();
}

function forun_alt_kat($id){
	return DB::where('kat_ustid',$id)->get('forum_kat')->result();
}

function end_message($id){
	return DB::orderBy('id','desc')->where('content_id',$id)->get('forum')->limit('1')->row();
}

