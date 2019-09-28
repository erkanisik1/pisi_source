$(function(){
	$('#example').DataTable();
	$('#example1').DataTable();
	$('#activemembers').DataTable();
	$('#pending_member').DataTable();
	$('#wiki_list').DataTable({
		"language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Turkish.json"
            }
        } 
		
	});	
/*
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var saat = today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
	var yyyy = today.getFullYear();
	if(dd<10){
		dd='0'+dd;
	} 
	if(mm<10){
		mm='0'+mm;
	} 
	var today = dd+'-'+mm+'-'+yyyy+' '+saat;
	document.getElementById("currentDate").value = today;
*/
	$(".active1").click(function(){

		var param = $(this).data("id");
		$.ajax({
			type: 'post',
			url: 'ajax/activemailSend',
			data: {par:param},
			success:function(sonuc){
				alert(sonuc);

			}
		});	
	});

	$(".sendform").click(function(){		

		$.ajax({
			type: 'post',
			url: 'ajax/emailSend',
			data: $('#cevap1').serialize(),
			success:function(cvp){

				$.confirm({
					title: 'Pisilinux Eposta!',
					content: cvp,
					theme: 'dark',
					buttons: {
						Mesajlar: function(){
							$(location).attr('href', '/panel/iletisim');
						},					        
						Anasayfa: function(){
							$(location).attr('href', '/panel');
						}
					}    					
				});
			}

		});	
	});

	$(".disable_member").click(function(){
		var param = $(this).data("id");


		$.post('ajax/disable_member',{par:param},function(response,status){

			 swal({
                title: "Pisi Linux Yönetim!", 
                text: "<strong>"+response+"</strong>", 
                type: "success",
                html: true,
                timer: 2000},
               function(){ 
                   location.reload();
               }
            );
			
			/*
				$.confirm({
					title: 'Pisilinux Yönetim!',
					content: response,
					theme: 'dark',
					buttons: {
						Üyeler: function(){
							$(location).attr('href', '/panel/members');
						},					        
						Anasayfa: function(){
							$(location).attr('href', '/panel');
						}
					}    					
				});
				*/
		})


	});



});