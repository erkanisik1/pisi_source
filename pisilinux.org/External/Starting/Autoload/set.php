<?php 
function tarih($tarih, $ayrac = '.',$sec = '') {
$bosluk = explode(' ', $tarih);
$tr = explode($ayrac,$bosluk['0']);


if ($sec=='gun') {return $tr['2'];}
if ($sec=='ay') {return $tr['1'];}
if ($sec=='yil') {return $tr['0'];}
if ($sec=='') {return $tr['2']."-".$tr['1']."-".$tr['0'];}			
			
		}

function jalert($p){echo '<script>alert("'.$p.'")</script>';}
function jconfirm($p){echo '<script>confirm("'.$p.'")</script>';}

function ayar(){return DB::get('settings')->row();}

function tcevir($tarih,$saatvarmi = '') {
			
      $bosluk = explode(' ', $tarih);
			$tr = explode("-",$bosluk['0']);
      $saat = $bosluk['1']['0'].$bosluk['1']['1'].$bosluk['1']['2'].$bosluk['1']['3'].$bosluk['1']['4'];
			if ($saatvarmi) {
				$tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'].' '.$saat;

			}else{
				$tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'];
			}
			return $tarih1;
		} 

function editor($sec){
	return  DB::select('username')->where('user_id',$sec)->get('user')->value();
 
}

function katname($data){
	return DB::select('adi')->where('id',$data)->get('kategoriler')->value();
} 

function wiki_katname($data){
  return DB::select('adi')->where('id',$data)->get('wiki_kat')->value();
} 

function etiket($data){
	$array = explode(',',$data);
	$a = '';
	foreach ($array as $key ) {
		$a .= '<a href="#" class="tags">'.$key.'</a> ';
	}
	return $a;
}

function git($link = ''){
        if($link){
          echo '<meta http-equiv="refresh" content="0; url='.URL::base($link).'">';
        }else{
          echo '<meta http-equiv="refresh" content="0; url='.URL::base().'">';
        }
      }//git

function seo($s) {
  $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','.');
  $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','-','-');
  $s = str_replace($tr,$eng,$s);
  $s = strtolower($s);
  $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
  $s = preg_replace('/\s+/', '-', $s);
  $s = preg_replace('|-+|', '-', $s);
  $s = preg_replace('/#/', '', $s);
  $s = str_replace('.', '', $s);
  $s = trim($s, '-');
  return $s;
}

function kategoriler($kat = '0',$table = 'kategoriler') {
	return DB::where('kat_ustid',$kat)->get($table)->result();
}

function wiki_kategoriler($kat = '0',$table = 'wiki_kat') {
  return DB::where('kat_ustid',$kat)->get($table)->result();
}

function etiketler(){
  $par = DB::select('icerik_tag')->get('content')->result();
  $a = '';$b='';
  foreach ($par as $key ) {
    $a .= $key->icerik_tag.',';
  }

  $new =  explode(',',$a);
  return array_unique($new);

}

function hataVarmi($p){
	if (DB::affectedRows()) {
			redirect(URL::base($p));
		}else{
			jalert(DB::error());
		}
}

function  KategoriListesi($id = 0,$secim = 0,$tire = 0,$select = ''){
    $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();
    $se = '';

   foreach ($sorgu as $key) {
    if ($key->kat_ustid == 0) { 
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->kat_ustid){
      $secim = $key->kat_ustid;
      $style = 'color:#000';
      $tire++;
    }

    if($key->id == $select){$sel = 'selected';}else{$sel='';}

    echo '<option value="'.$key->id.'" style="'.$style.'"'.$se.$sel.' >'.str_repeat('-&nbsp;',$tire).$key->adi."</option>";
    KategoriListesi($key->id,$secim,$tire,$select);       
  }

}

 

function post($method,$function){
  if (method::post()) {
    $this->$method->$function(method::post());      
  }
}

/* START KATEGORİ OPTİON LİST */
function  yonetimKategori($selected = 0, $id = 0,$secim = 0,$tire = 0){

  $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();

  foreach ($sorgu as $key) {

    if ($key->kat_ustid == 0) {$tire = 0;$style = 'color:#000;font-weight:bolder;font-size:13px;';}

    if ($secim != $key->kat_ustid){$secim = $key->kat_ustid;$style = 'color:#000';$tire++;}

    if ($key->id == $selected) { $selected = 'selected'; }  
    echo '<option value="'.$key->id.'" style="'.$style.'" '.$selected.'>'.str_repeat('-&nbsp;',$tire).$key->adi."</option>";

    yonetimKategori($key->id,$secim,$tire);
  }
}
/* STOP KATEGORİ OPTİON LİST */

function  KategoriTablosu($id = 0,$secim = 0,$tire = 0){
  $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();

  foreach ($sorgu as $key) {

    if ($key->kat_ustid == 0) {
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->kat_ustid){
      $secim = $key->kat_ustid;
      $style = 'color:#000';
      $tire++;
    }

    $duzenle = URL::base('panel/category/edit/'.$key->id);
    $sil = URL::base('panel/category/delete/'.$key->id);

    echo '<tr>
    <td><img src="'.URL::base($key->img).'"></td>
    <td style="'.$style.'">'.str_repeat('-&nbsp;',$tire).$key->adi.'</td>
    <td>'.$key->aciklama.'</td>
    <td class="islemler" style="text-align: center;"> 
     <a href="'.$duzenle.'"><i class="fa fa-pencil"></i></a>
     <a href="'.$sil.'" onclick="return confirm(\'Bu kaydı silmek istediğinize eminmisiniz?\')"><i class="fa fa-remove"></i></a> 
   </td>
 </tr>';
 KategoriTablosu($key->id,$secim,$tire);
}
}

function kelimebol($metin, $karaktersayisi){ 
      $icerik = htmlspecialchars_decode($metin);
      $icerik = strip_tags($icerik);
      $icerik = str_replace(array("\t","\r","\n"), ' ',$icerik);
      $icerik_bol = explode(' ', $icerik); // metini bosluklara gore bolduk
      $icerik = '';
      for($i = 0; $i < count($icerik_bol); $i++) {
           if ($icerik_bol[$i] != '') // veri yok mu? Atla, varsa ekle
           $icerik .= trim($icerik_bol[$i]).' ';
       }

       if( preg_match('/(.*?)\s/i', substr($icerik, $karaktersayisi), $dizi) )
        return $icerik = substr($icerik, 0, $karaktersayisi+strlen($dizi[0]));
      } //kelimedenbol

      function content_image($icerik) {
    $resimbir = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', htmlspecialchars_decode($icerik), $matches);
    if($output){$resimbir = $matches['1']['0'] ;}
          if(empty($resimbir)){ //Eğer resim eklememişseniz
          $resimbir = URL::base().'uploads/images/eagle.png';
         }
       return $resimbir;
  }//resimgoster

  function authority($id){
    $user = DB::where('user_id',$id)->get('user')->row();

    return DB::where('id',$user->authority)->get('authority')->row();
  }

  function setting(){
      return DB::get('settings')->row();
    }

    function wikicontent(){
      return DB::orderBy('id','desc')->where('durum','1')->limit('3')->get('wiki')->result();
    }