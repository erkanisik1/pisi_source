<?php namespace Project\Controllers;
use DB, Import,URL,Cookie,Session,ML,Method;
/**
* Created By  : Erkan IŞIK
* Created Date: 2017-09-27
* Update Date : 2018-03-28
*/
class Forum extends Controller
{	
    function main(){ 
        //$data['katlist'] = $this->forum_model->katlist();
        Import::view('forum/index',$data);
      
    }

      function category_list(){ 
        $data['katlist'] = $this->forum_model->katlist();
        Import::view('forum/kategori_list',$data);
      
    }

    function forumKat(){
    	if(method::post()){$this->forum_model->cat_insert(method::post());}
    	import::view('forum/forumKat_new_view');
    }

    function kategori_edit($id){
        if(method::post()){$this->forum_model->cat_update(method::post());}
        $data['edit'] = $this->forum_model->kat_edit($id);
        import::view('forum/forumKat_edit_view',$data);
    }

    
	function delete($id){
		DB::where('id', $id)->delete('forum_kat');
		redirect(baseUrl('panel/forum'));
	}

	
}