$(document).ready(function(){
	//скролл по ссылкам
	$('a[href^="#"]').click(function () { 
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$('html').animate( { scrollTop: destination-30 }, 1000 );
		return false;
	});
	/**----------------------------------------------------**/	
	
	elen_fit();

	
	//слайдер
	var timer = setInterval(sldr, 5000);
	var count = 0;
	function sldr(){
		var currentImage = $('.img.curry');
		var currentImageIndex = $('.img.curry').index(); 
		var nextImageIndex = 0;
		
		if(currentImageIndex == 3){
			nextImageIndex = 0;
		}else{
			nextImageIndex = currentImageIndex + 1;
		}
	
		var nextImage = $('.img').eq(nextImageIndex);
		currentImage.fadeOut(3000);
		currentImage.removeClass('curry');
		nextImage.fadeIn(3000);
		nextImage.addClass('curry');
	}
	/**----------------------------------------------------**/
	
	
	var isMobile = false; //initiate as false
	// device detection
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
		|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))){
			isMobile = true;
		} 
	
	if(isMobile == true){
		$('#video_head_bar').css({'display': 'none'});
		$('.slider').css({'display': 'block'});
		$('.cte').css({'background': 'rgba( 0, 0, 0, 0.4)'});
	}
	else{
		$('#video_head_bar').css({'display': 'block'});
		$('.slider').css({'display': 'none'});
		$('.cte').css({'background': 'rgba( 0, 0, 0, 0.0)'});
	}
	
	
});

var scrl = 0;

$(window).scroll(function(){
		
	var cPos = $('.digits_us').offset().top;
	var topWindow = $(window).scrollTop();
		
	if (($(document).scrollTop() + $(window).height() > $('.digits_us').offset().top && $(document).scrollTop() - $('.digits_us').offset().top < $('.digits_us').height()) && (scrl < 1)){
		$(".spincrement").spincrement();
		scrl = 1;
	}
});
	
	

$(window).resize(function(){
	elen_fit();
});


function elen_fit(){
//подгоняем элементы
	var m_height = $(window).height()-70;
	if(m_height < 900) { 									
		$('#start').css({'height': m_height});
		$('.is_overlay video').css({'top': m_height-$('.is_overlay video').height()});
		$('.img').css({'height': m_height});
	}else{
		$('#start').css({'height': 900});
		$('.is_overlay video').css({'top': m_height-$('.is_overlay video').height()});
		$('.img').css({'height': 900});
	}

	
	var strt_height = $('#start').height();
	var strt_width = $('#start').width();
	
	$('.cte_text_1').css({'margin-top': (strt_height/2)-170});
	$('.cte').css({'height': strt_height});
	$('.cte').css({'width': strt_width});

/**----------------------------------------------------**/
}


//открывалка формы заказа


$(document).on('click','.buy_btn', function(){
	$('#form_send').fadeIn(400);
	document.getElementById("send_done").style.display="none";
	$('#shadow_box').fadeIn(400);
	document.body.style.overflow = "hidden";
	program = $(this).attr('id');
	if(program == 'prog_min'){ program = "Минимальная" }
	if(program == 'prog_mid'){ program = "Средняя за 15000" }
	if(program == 'prog_midh'){ program = "Средняя за 20000" }
	if(program == 'prog_max'){ program = "Максимальная" }
	if(program == 'photo_ses'){ program = "Фотозона" }
	if(program == 'strt_btn'){ program = "Обр. звонок сверху" }
	if(program == 'cont_buy'){ program = "Обр. звонок снизу" }
	document.forms['order_form'].elements[3].value = program;
});

$(document).on('click','#shadow_box', function(){
    if (event.target.id == 'shadow_box'){
		$('#shadow_box').fadeOut(400);
		document.body.style.overflow = "auto";
	}
});

$(document).on('click','#send_btn', function(){
	test_form();
});

//проверка адекватности данных
function test_form(){
	
	var test = 'ok';
	var name = document.forms['order_form'].elements[0].value;
	var phone = document.forms['order_form'].elements[1].value;
	/**
		var mail = document.forms['order_form'].elements[2].value;
		var v_mail = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
		var valid_mail = v_mail.test(mail);
		if(mail == ''){
			document.forms['order_form'].elements[2].style.border = "1px solid red";
			test = 'error';
		}
		if(valid_mail){}
		else{
			document.forms['order_form'].elements[2].style.border = "1px solid red";
			test = 'error';
		}
	**/
	var v_phone = /^\d[\d\(\)\ -]{4,14}\d$/;
	var valid_phone = v_phone.test(phone);
	if(name == ''){
		document.forms['order_form'].elements[0].style.border = "1px solid red";
		test = 'error';
	}
	if(phone == ''){
		document.forms['order_form'].elements[1].style.border = "1px solid red";
		test = 'error';
	}
	if(valid_phone){}
	else{
		document.forms['order_form'].elements[1].style.border = "1px solid red";
		test = 'error';
	}
	
	
	if (test == 'ok'){
		send();
	}
}

//сброс стиля инпутов
function clear_bord(f_n,a){
	document.forms[f_n].elements[a].style.border = "1px solid #cccccc";	
}


function send(){
	function funcBuy(data){
		document.getElementById("form_send").style.display="none";
		//document.getElementById("send_done").style.display="block";
		document.location.replace("thank.php");
	}
			
	var name = document.forms['order_form'].elements[0].value;
	var phone = document.forms['order_form'].elements[1].value;
	var text = document.forms['order_form'].elements[2].value;
	var program = document.forms['order_form'].elements[3].value;
		$.ajax({
			type: 'POST',
			url:  "send.php",
			data: ({name: name, phone: phone, text: text, program: program}),
			dataType: "html",
			success: funcBuy
		});	
	}

function show_hide(){
	if (window.pageYOffset>10){
		$('.nav_lnk').css({'color': 'black'});
		$('#menu').css({'background': 'rgb(256, 256, 256, 1)'});
		$('#menu').css({'border-bottom': '1px solid #ccc'});
		$('#menu').css({'box-shadow': '0 3px 30px rgba(0,0,0,0.5)'});
		console.log('hide');
	}
	else{
		console.log('show');
		$('.nav_lnk').css({'color': 'white'});
		$('#menu').css({'background': 'rgb(256, 256, 256, 0)'});
		$('#menu').css({'border-bottom': 'none'});
		$('#menu').css({'box-shadow': 'none'});
	}
}

















