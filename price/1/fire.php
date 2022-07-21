

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<meta http-equiv="Cache-Control" content="no-cache"></meta>
<meta property="og:image" content="logo_msg.png"/>
	<title>Файершоу “Эстетика”</title>

	<link rel="stylesheet" href="style.css" type="text/css"></link>
	<link rel="stylesheet" href="../css/blueimp-gallery.min.css"></link>
	<link href="../fotorama.css" type="text/css" rel="stylesheet"></link>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="../js/blueimp-gallery.min.js"></script>
	<script src="../js/spin.min.js"></script>
	<script src="js/m_funct.js"></script>
	<script src="../fotorama.js" type="text/javascript"></script>
		
	<script type="text/javascript">	
		$(document).ready(function(){
			$('.go_to').click( function(){
			var scroll_el = $(this).attr('href');
				if ($(scroll_el).length != 0) {
				$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1000);
				}
				return false;
			});
		});
	</script>
	

	
	<script type="text/javascript">
		window.onscroll = function (){
			slider();
		};
	</script>
	
	<script type="text/javascript">
		$(window).resize(function() {
			myWidth= window.innerWidth -150; 
			myHeight= window.innerHeight-75; 
			myHeightTEL= window.innerHeight-155; 
			myHeightVIB= window.innerHeight-235; 
			
			document.getElementById("call").style.top=myHeight+"px";
			document.getElementById("call").style.left=myWidth+"px";
			document.getElementById("telegram").style.top=myHeightTEL+"px";
			document.getElementById("telegram").style.left=myWidth+"px";
			document.getElementById("viber").style.top=myHeightVIB+"px";
			document.getElementById("viber").style.left=myWidth+"px";
			
		});
	</script>
	
	<script type="text/javascript">
		window.onload = function(){
			elpos();
		}
	</script>
	
</head>

<body>

<div class="call_back_panel" id="viber" >
	<a href="viber://add?number=+380937768127" target="blank"></a>
</div>

<div class="call_back_panel" id="telegram" >
	<a href="https://t.me/fireshow_estetiqua" target="blank"></a>
</div>

<div class="call_back_panel" id="call" >
	<a href="tel:+380937768127" target="blank"></a>
</div>



<div class="up_panel" id="up_panel">
	<a class="go_to" id="go_to_link" href="#top"><img src="img/up.png" id="up_img"><p class="main_text" id="vv">наверх</p></a>
</div>

<div id="top"></div>

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

	<div id="header" onmouseover="getElementById('header').style.opacity='1';" onmouseout="if (window.pageYOffset>10){getElementById('header').style.opacity='0.7';}else{getElementById('header').style.opacity='1';}">
		<div id="head_rect">
			<div id="head_logo">
			<img src="../img/logo.png">
			</div>
		</div>		
	</div>
	<div class="content" id="tort">
		<div class="top" style="display:flex;">
			<div id="left_slider">
				<div class="left_side" id="left_side">
					<div class="projects_top shadows">
						
							<p class="title_text_2">Доброго времени суток!</p>
							<p class="projects_title padd_l_20">Здесь мы постарались максимально точно описать наши возможности.<br>
																Однако, если вы не можете найти ответ на интересующий вас вопрос - не стесняйтесь, спросите!
																</p>
						<hr class="hor_l">
						
						
						<div class="fotorama padd_l_20" data-width="525" data-height="290" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
							<a href="https://youtu.be/GBq4c_6ARh4" data-img="../img/promo_prev.jpg"></a>
						</div>
						
						
						<div class="photo padd_l_20" id="fire_">
								<a href="../img/fire/big/1.jpg"><img src="../img/fire/prev/1.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/2.jpg"><img src="../img/fire/prev/2.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/3.jpg"><img src="../img/fire/prev/3.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/4.jpg"><img src="../img/fire/prev/4.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/5.jpg"><img src="../img/fire/prev/5.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/6.jpg"><img src="../img/fire/prev/6.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/7.jpg"><img src="../img/fire/prev/7.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/8.jpg"><img src="../img/fire/prev/8.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/9.jpg"><img src="../img/fire/prev/9.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/10.jpg"><img src="../img/fire/prev/10.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/11.jpg"><img src="../img/fire/prev/11.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/12.jpg"><img src="../img/fire/prev/12.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/13.jpg"><img src="../img/fire/prev/13.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/14.jpg"><img src="../img/fire/prev/14.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/15.jpg"><img src="../img/fire/prev/15.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/16.jpg"><img src="../img/fire/prev/16.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/17.jpg"><img src="../img/fire/prev/17.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/18.jpg"><img src="../img/fire/prev/18.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/19.jpg"><img src="../img/fire/prev/19.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/20.jpg"><img src="../img/fire/prev/20.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/21.jpg"><img src="../img/fire/prev/21.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/22.jpg"><img src="../img/fire/prev/22.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/23.jpg"><img src="../img/fire/prev/23.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/24.jpg"><img src="../img/fire/prev/24.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/25.jpg"><img src="../img/fire/prev/25.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/26.jpg"><img src="../img/fire/prev/26.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/27.jpg"><img src="../img/fire/prev/27.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/28.jpg"><img src="../img/fire/prev/28.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/29.jpg"><img src="../img/fire/prev/29.jpg" class="gallery_min_t"></a>
								<a href="../img/fire/big/30.jpg"><img src="../img/fire/prev/30.jpg" class="gallery_min_t"></a>
							
								<script type="text/javascript">
									document.getElementById('fire_').onclick = function (event) {
										event = event || window.event;
										var target = event.target || event.srcElement,
											link = target.src ? target.parentNode : target,
											options = {index: link, event: event},
											links = this.getElementsByTagName('a');
										blueimp.Gallery(links, options);
									};
								</script>
								<script type="text/javascript">
									blueimp.Gallery(
										document.getElementById('fire_').getElementsByTagName('a'),
										{
											container: '#blueimp-gallery-carousel',
											carousel: true
										}
									);
								</script>
						</div>
						<br>
						
						
					</div>
				</div>	
			</div>
			
			 <!------------------------------------------------------------------------------------------------>
			
			<div class="right_side">
				<div id="right_slider">
					<div class="avatar shadows">
						<img src="img/fire_avatar.png" class="avatar_img">
					</div>
					
					<div class="location shadows">
						<img src="img/location.png" height="20" style="margin: -2px 10px 0 0;">
						<p class="projects_title">Home</p>
						<p class="main_text">Харьков, Украина</p>
					</div>

					<div class="h_rider_bar shadows">
						<p class="main_text">Общий райдер</p>
						<div class="h_rider_block padd_l_20 padd_t_8">
							<img src="img/coin_icon.png">
							<div class="h_rider_text">
								<p class="main_text padd_O">Предоплата</p>
								<p class="projects_title">Для подтверждения даты - 50% предоплата.</p>
							</div>
						</div>
						<div class="h_rider_block padd_l_20 padd_t_8">
							<img src="img/security_icon.png">
							<div class="h_rider_text">
								<p class="main_text padd_O">Охрана площадки</p>
								<p class="projects_title">Недопуск посторонних лиц.</p>
							</div>
						</div>
						<div class="h_rider_block padd_l_20 padd_t_8">
							<img src="img/clock_icon.png">
							<div class="h_rider_text">
								<p class="main_text padd_O">Соблюдение тайминга</p>
								<p class="projects_title">Проведение шоу в строго оговоренное время.</p>
							</div>
						</div>
						
						<hr class="hor_l mar_b_10">

					</div>
				</div>
			</div>	
		</div>
		
		
		
		<!-----------------------------------------shows------------------------------------------------------------------------------------------>
	
	<div class="shadows" style="margin-top:17px;">
		<div class="pr_t" style="margin-top:0;">
			<div class="pr_info_title">
				<div class="t_img">
					<img src="img/fire_2_icon.png">
				</div>
				<div class="t_text" style="padding:14px;">
					<p class="main_text padd_O"><b>Программы</b></p>
					<p class="projects_title ">Варианты постановочных шоу</p>
				</div>
			</div>
			<br>
			<p class="main_text" style="margin-bottom:0; padding-bottom:0;">
			</p>
			
			<div class="bar_button shw">
				<a>ПОКАЗАТЬ</a>
				<a style="display: none;">СКРЫТЬ</a>
			</div>
		</div>
		
		
		
		<!-----------------------------------------minimal------------------------------------------------------------------------------------------>
		<div id="show_bar" style="display: none;">
		<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
			<div class="pr_info_left">
				<p class="main_text"><b>Программа “Минимальная”</b></p>
				<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
					<a href="https://www.youtube.com/watch?v=Gh189NteteQ"></a>
				</div>
				<br>
				<table style="margin-left:20px;">
					<tr>
						<td><img src="img/fire_clock.png"></td>
						<td><p class="main_text fire_text">6 минут</p></td>
						<td style="width:20px;"></td>
						<td><img src="img/fire_humans.png"></td>
						<td><p class="main_text fire_text">3 артиста</p></td>
					</tr>
				</table>

			</div>
					
			<div class="pr_info_right" style="padding-top:0;">
				<div class="pr_curr">
					<table class="table_cost">
						<tr>
							<td>
								<img src="img/curr_icon.png">
								<p class="main_text"><b>Цена</b></p>
							</td>
							<td>
								<p class="cost_2"><b>7000 грн</b></p>
							</td>
						</tr>
					</table>
				</div>		
					<p class="main_text" ><br>Минимальная программа длительностью около 6 минут, с участием	3-х артистов. 
												Используется базовый набор огненного реквизита, пиротехники и 2 пиротехнических 
												генератора. Также в подарок Вы получаете огненное сердце (горящее до 2-х часов!) 
												или ручной огнемет, с которым можно пофотографироваться после выступления.
					</p>				
			</div>
		</div>
		
		<div class="pr_t" style="margin-top:0; height:30px;">
			<hr class="hor_l" style="margin-top:0;">
		</div>
		
		
		<!-----------------------------------------standart---------------------------------------------------------------------------------------->
		
		<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
			<div class="pr_info_left">
				<p class="main_text"><b>Программа “Стандартная”</b></p>
				<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
					<a href="https://www.youtube.com/watch?v=JSZ2OlWnwlg"></a>
				</div>
				<br>
				<table style="margin-left:20px;">
					<tr>
						<td><img src="img/fire_clock.png"></td>
						<td><p class="main_text fire_text">7 минут</p></td>
						<td style="width:20px;"></td>
						<td><img src="img/fire_humans.png"></td>
						<td><p class="main_text fire_text">4 артиста</p></td>
					</tr>
				</table>

			</div>
					
			<div class="pr_info_right" style="padding-top:0;">
				<div class="pr_curr">
					<table class="table_cost">
						<tr>
							<td>
								<img src="img/curr_icon.png">
								<p class="main_text"><b>Цена</b></p>
							</td>
							<td>
								<p class="cost_2"><b>10000 грн</b></p>
							</td>
						</tr>
					</table>
				</div>		
					<p class="main_text" ><br>Минимальная программа длительностью около 6 минут, с участием	3-х артистов. 
												Используется базовый набор огненного реквизита, пиротехники и 2 пиротехнических 
												генератора. Также в подарок Вы получаете огненное сердце (горящее до 2-х часов!) 
												или ручной огнемет, с которым можно пофотографироваться после выступления.
					</p>				
			</div>
		</div>
		
		<div class="pr_t" style="margin-top:0; height:30px;">
			<hr class="hor_l" style="margin-top:0;">
		</div>
		
		
		<!-----------------------------------------big------------------------------------------------------------------------------------------>		
		
		<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
			<div class="pr_info_left">
				<p class="main_text"><b>Программа “Большая”</b></p>
				<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
					<a href="https://vimeo.com/348819362" data-img="../img/fire/big/26.jpg"></a>
				</div>
				<br>
				<table style="margin-left:20px;">
					<tr>
						<td><img src="img/fire_clock.png"></td>
						<td><p class="main_text fire_text">8 минут</p></td>
						<td style="width:20px;"></td>
						<td><img src="img/fire_humans.png"></td>
						<td><p class="main_text fire_text">5 артистов</p></td>
					</tr>
				</table>

			</div>
					
			<div class="pr_info_right" style="padding-top:0;">
				<div class="pr_curr">
					<table class="table_cost">
						<tr>
							<td>
								<img src="img/curr_icon.png">
								<p class="main_text"><b>Цена</b></p>
							</td>
							<td>
								<p class="cost_2"><b>15000 грн</b></p>
							</td>
						</tr>
					</table>
				</div>		
					<p class="main_text" ><br>Эта программа пользуется большой популярностью среди наших заказчиков. 
												5 артистов в течении 8 минут покажут, что такое яркое завершение праздника.
					</p>				
			</div>
		</div>
		
		<div class="pr_t" style="margin-top:0; height:30px;">
			<hr class="hor_l" style="margin-top:0;">
		</div>
		
		<!-----------------------------------------extend------------------------------------------------------------------------------------------>		
				
		<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
			<div class="pr_info_left">
				<p class="main_text"><b>Программа “Расширенная”</b></p>
				<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
					<a href="https://vimeo.com/343945335" data-img="../img/fire/big/20.jpg"></a>
				</div>
				<br>
				<table style="margin-left:20px;">
					<tr>
						<td><img src="img/fire_clock.png"></td>
						<td><p class="main_text fire_text">8 минут + интерактив</p></td>
						<td style="width:20px;"></td>
						<td><img src="img/fire_humans.png"></td>
						<td><p class="main_text fire_text">3 артиста</p></td>
					</tr>
				</table>

			</div>
					
			<div class="pr_info_right" style="padding-top:0;">
				<div class="pr_curr">
					<table class="table_cost">
						<tr>
							<td>
								<img src="img/curr_icon.png">
								<p class="main_text"><b>Цена</b></p>
							</td>
							<td>
								<p class="cost_2"><b>20000 грн</b></p>
							</td>
						</tr>
					</table>
				</div>		
					<p class="main_text" ><br>Эта программа включает в себя интерактив с использованием нашей 
												огненно-пиротехнической фотозоны и паркового салюта во время шоу.
					</p>				
			</div>
		</div>
		
		<div class="pr_t" style="margin-top:0; height:30px;">
			<hr class="hor_l" style="margin-top:0;">
		</div>
		
		<!-----------------------------------------premium------------------------------------------------------------------------------------------>		
			
		<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
			<div class="pr_info_left">
				<p class="main_text"><b>Программа “Премиум”</b></p>
				<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
					<a href="https://vimeo.com/349181066"></a>
				</div>
				<br>
				<table style="margin-left:20px;">
					<tr>
						<td><img src="img/fire_clock.png"></td>
						<td><p class="main_text fire_text">11 минут</p></td>
						<td style="width:20px;"></td>
						<td><img src="img/fire_humans.png"></td>
						<td><p class="main_text fire_text">5 артистов</p></td>
					</tr>
				</table>

			</div>
					
			<div class="pr_info_right" style="padding-top:0;">
				<div class="pr_curr">
					<table class="table_cost">
						<tr>
							<td>
								<img src="img/curr_icon.png">
								<p class="main_text"><b>Цена</b></p>
							</td>
							<td>
								<p class="cost_2"><b>40000 грн</b></p>
							</td>
						</tr>
					</table>
				</div>		
					<p class="main_text" ><br>Если у Вас масштабное мероприятие и нужно подчеркнуть статус или нужен яркий 
												финал городского праздника - тогда это Ваш выбор! Большое колличество 
												всевозможных спецэффектов, профессиональный звук и свет, а также парковый 
												фейерверк не позволят отвести взгляд на протяжении 11 минут.
					</p>				
			</div>
		</div>
		
		<div class="pr_t" style="margin-top:0; height:30px;">
			<hr class="hor_l" style="margin-top:0;">
		</div>	
		
		</div>
	</div>	
		<!-----------------------------------------photozone------------------------------------------------------------------------------------------>		
			
		<div class="shadows" style="padding-top: 17px;">
			<div class="pr_t photzn" style="margin-top:0;">
				<div class="pr_info_title">
					<div class="t_img">
						<img src="img/photozone.png">
					</div>
					<div class="t_text" style="padding:14px;">
						<p class="main_text padd_O"><b>Огненно-пиротехническая фотозона</b></p>
						<p class="projects_title ">Такая только у нас и у... Нет. Только у нас!</p>
					</div>
				</div>
				<br>
				
									
				<hr class="hor_l" style="margin: 0; margin-top: 20px;"></hr>
			</div>	
			<div id="photozone_bar" style="display: none;">
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Вы только посмотрите как это круто 🤟</b></p>
						<div class="fotorama padd_l_20" data-width="525" data-height="240" data-ratio="700/426" data-fit="cover" style="margin-top:24px;">
							<a href="https://vimeo.com/342558729"></a>
						</div>
						<br>
						<div style="margin: 0 0 0 20px;" id="galleryfz_">
							<a href="../img/fire/big/fz_1.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_1.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_2.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_2.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_3.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_3.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_4.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_4.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_5.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_5.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_6.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_6.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_7.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_7.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_8.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_8.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_9.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_9.jpg" class="galleryfz_cell"></a>
							<a href="../img/fire/big/fz_10.jpg"><img alt="Огненная фотозона" src="../img/fire/prev/fz_10.jpg" class="galleryfz_cell"></a>
							
							<script type="text/javascript">
								document.getElementById('galleryfz_').onclick = function (event) {
									event = event || window.event;
									var target = event.target || event.srcElement,
										link = target.src ? target.parentNode : target,
										options = {index: link, event: event},
										links = this.getElementsByTagName('a');
										blueimp.Gallery(links, options);
								};
							</script>
							<script type="text/javascript">
								blueimp.Gallery(
								document.getElementById('galleryfz_').getElementsByTagName('a'),
									{
										container: '#blueimp-gallery-carousel',
										carousel: true
									}
								);
							</script>
						</div>
							
					</div>
					
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>от 8000 грн</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Это абсолютно уникальная услуга, которая не имеет аналогов в СНГ! <br> Для Вас мы собрали 
														все то лучшее, что может дать огонь на Вашем празднике. Просто посмотрите видео и 
														фото которые можно получить. Вы достойны лучшего!
							</p>	
							
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/advantages.png">
										<p class="main_text"><b>Преимущества</b></p>
									</td>
								</tr>
							</table>
							
							<ul class="fzone">
								<li> абсолютно безопасна ️</li>
								<li> не имеет неприятного запаха </li>
								<li> не дымит </li>
								<li> время работы неограничено </li>
								<li> подойдёт практически для любой площадки </li>
								<li> яркий интерактив на праздник </li>
								<li> всепогодность </li>
								<li> пиротехнические эффекты </li>
							</ul>
							
							<p class="main_text"><br>Также вы можете дополнительно дозаказать любой из эффектов описаных <b>вот тут</b>.
							</p>
							
					</div>
					<br>
				</div>
			</div>
		</div>
		

		<!-----------------------------------------effects------------------------------------------------------------------------------------------>		
		
		<div class="shadows" style="padding-top: 17px;">
			<div class="pr_t efcts" style="margin-top:0;">
				<div class="pr_info_title">
					<div class="t_img">
						<img src="img/fire_dop_icon.png">
					</div>
					<div class="t_text" style="padding:14px;">
						<p class="main_text padd_O"><b>Спецэффекты</b></p>
						<p class="projects_title ">Вы можете выбрать любую позицию из списка ниже и включить ее в шоу</p>
					</div>
				</div>
				<br>
				<p class="main_text" style="margin-bottom:0; padding-bottom:0;">
				Обратите внимание! При заказе спецэффектов без фаер шоу и без фотозоны - цена заказа 
												должна быть не менее 2000 грн. Например, если вы хотите заказать <b>только</b> холодные фонтаны
												на первый танец.
				</p>
									
				<hr class="hor_l" style="margin: 0; margin-top: 20px;"></hr>
			</div>
			
			<div id="effects_bar" style="display: block;">
			
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Холодный пиротехнический фонтан (маленький)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_2m.jpg">
							<source src="video/effects/fontan_2m.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>350 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>2 метра</b>.
													<br>Время горения - <b>30 секунд</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Холодный пиротехнический фонтан (средний)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_3m.jpg">
							<source src="video/effects/fontan_3m.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>450 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>3 метра</b>.
													<br>Время горения - <b>1 минута</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Холодный пиротехнический фонтан (большой)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_5m.jpg">
							<source src="video/effects/fontan_5m.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>550 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>5 метров</b>.
													<br>Время горения - <b>1 минута</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Трещащий фонтан (маленький)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_tresk.jpg">
							<source src="video/effects/fontan_tresk.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>350 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>2 метра</b>.
													<br>Время горения - <b>30 секунд</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Трещащий фонтан (большой)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_tresk_big.jpg">
							<source src="video/effects/fontan_tresk_big.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>650 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>7 метров</b>.
													<br>Время горения - <b>1 минута</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Двухцветный фонтан (зелено-красный)</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fontan_zk.jpg">
							<source src="video/effects/fontan_zk.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>350 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Максимальная высота - <b>2 метра</b>.
													<br>Время горения - <b>30 секунд</b>.	
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
			
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Тройной генератор огня</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/ogn3.jpg">
							<source src="video/effects/ogn3.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>1500 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Тройная огнемашина выпускает три столба пламени, 
							высотой около 2-3 метров каждый. Дает хороший эффект "заполнения" и дарит зрителям много тепла 😉
							<br>
							Управляется дистанционно. Способна сделать около 70 залпов длительностью 2 сек каждый.
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				
				<div class="pr_info_bar " style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Огненная стена</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/fire_wall.jpg">
							<source src="video/effects/fire_wall.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>от 3000 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Состоит из миниатюрных генераторов огня, расположенных на разных уровнях.<br>
							Дает прекраснейший эффект заполнения и объема. Количество огнегенераторов на стене ограничено только
							вашим желанием.<br> Цена указана за базовую комплектацию - 7 огненных точек. 
							Каждые дополнительные 2 точки - 500 грн. 
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Пиротехгический генератор</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/pyrojets.jpg">
							<source src="video/effects/pyrojets.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>1500 грн/2шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Данный спецэффект работает как многоразовая пиротехническая вспышка или как 
							пиротехнический фонтан. Как правило используется для подчеркивания акцентов в постановке. Также дает 
							отличный световой эффект, который на видеосьемке и фото не очень хорошо передается.
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				
				<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Ручной огнемет</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/ogn.jpg">
							<source src="video/effects/ogn.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>1500 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br>Обладает согревающим эффектом. В руках умелого артиста вызывает 
							бурю эмоций у зрителя. <br> В руках зрителя на фото в инстаграм - поток лайков и всеобщее признание 😎
							<br> Если вы заказали программу где используется ручной огнемет, то после шоу вы и гости сможете 
							сделать фото с ним (под контролем наших артистов).
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Малое огненное сердце</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/heart_min.jpg">
							<source src="video/effects/heart_min.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>1500 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br> Работает на газу, в следствии чего способно работать от 2х часов и более.
							Также не имеет запаха и дыма.
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				
				<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Большое огненное сердце</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/heart_big.jpg">
							<source src="video/effects/heart_big.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>4000 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br> Обладает всеми характеристиками младшего решения. Отличается только размером.
							Ну и как ни странно - ценой 💲💲💲				
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
				
				<div class="pr_info_bar" style="margin-top:0; padding-bottom:20px;  padding-top: 17px;">
					<div class="pr_info_left">
						<p class="main_text"><b>Пиротехнический огнемет</b></p>
						<video class="video_local_cont" controls="controls" poster="video/effects/ognpyro.jpg">
							<source src="video/effects/ognpyro.mp4" type="video/mp4"/> 
						</video>
						<br>
						</div>
										
					<div class="pr_info_right" style="padding-top:0;">
						<div class="pr_curr">
							<table class="table_cost">
								<tr>
									<td>
										<img src="img/curr_icon.png">
										<p class="main_text"><b>Цена</b></p>
									</td>
									<td>
										<p class="cost_2"><b>1500 грн/шт</b></p>
									</td>
								</tr>
							</table>
						</div>		
							<p class="main_text" ><br> Результат слияния ручного огнемета и пиротехнического генератора.
							Гарантирует безудержное веселье и в самом прямом смысле яркие впечатления.
							</p>				
					</div>
				</div>
				
				<div class="pr_t" style="margin-top:0; height:30px;">
					<hr class="hor_l" style="margin-top:0;">
				</div>
				
			</div>
		</div>
		
		
		
		
	
	<div class="footer">&#169; estetIQua 2019</div>
						
</body>
</html>