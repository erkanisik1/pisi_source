$(function(){

$('#submit').attr("disabled", "disabled");

 	$("#password2").focusout(function() {
        var password = $("#password").val();
        var password2 = $("#password2").val();
      
        if (password != password2) {
			$("#password2").val("");
			  $('#password2').attr("placeholder", "Şifreleriniz uyuşmuyor lütfen kontrol edin!");
			  $('#password2').css("background-color","#FBDDDD");


		}else{
			
			$('#password').css("background-color","#9DFADC").show(1500);
			$('#password2').css("background-color","#9DFADC");
			$('#submit').removeAttr("disabled");
		}
       
    });

    $('#gorev').click(function(){
    
    window.location.replace("https://pisilinux.org/bugs/addtask");
    	
    });




	// footer alanını ekranın altına yapıştırır
 	var docHeight = $(window).height();
   	var footerHeight = $('#footer').height();
   	var footerTop = $('#footer').position().top + footerHeight;
   	var ppx = docHeight - footerTop-40;

   	if (footerTop < docHeight) {
    	$('#footer').css('margin-top', ppx + 'px');
   	}
   	// footer alanını ekranın altına yapıştırır
    
    // forum ekran seçme
$('#gorunum').change(function(){
        var val = $(this).val(); 
         if (val == 1) {
        window.location.replace("/forum/forum1");
      }

      if (val == 2) {
        alert('Zaten soru / cevap bölümündesin.');
        
      }
        
    });
    

     // forum ekran seçme
});
