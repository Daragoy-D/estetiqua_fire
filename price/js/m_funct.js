function slider() {
			var scrollPosition = window.pageYOffset;
				if (scrollPosition>90 && screen.width>1024){
					document.getElementById('up_panel').style.visibility="visible";
				}
				else
				{
					document.getElementById('up_panel').style.visibility="hidden";
				}
			
				
		}
		
function elpos(){
			myWidth= window.innerWidth -150; 
			myHeight= window.innerHeight-75; 
			myHeightTEL= window.innerHeight-155; 
			myHeightVIB= window.innerHeight-235; 
			
			document.getElementById("go_to_link").style.width=(((window.innerWidth-960)/2)-10)+"px";
			
			document.getElementById("call").style.top=myHeight+"px";
			document.getElementById("call").style.left=myWidth+"px";
			document.getElementById("telegram").style.top=myHeightTEL+"px";
			document.getElementById("telegram").style.left=myWidth+"px";
			document.getElementById("viber").style.top=myHeightVIB+"px";
			document.getElementById("viber").style.left=myWidth+"px";
			document.getElementById("call").style.opacity="1";
			document.getElementById("telegram").style.opacity="1";
			document.getElementById("viber").style.opacity="1";
}

function shower(a,b){
	
	if(a=="show"){
		document.getElementById(b).style.display="block";
	}
	else{
		
		
		 location.reload();

		
		
	}
}

function showpr(a){
	
	if (document.getElementById(a).style.display=="none"){
		
		document.getElementById(a).style.display="block";
		document.getElementById('price').style.height="690px";
	}
	else{
		document.getElementById(a).style.display="none";
		document.getElementById('price').style.height="500px";
	}
		
}

$(document).on('click','.efcts', function(){
	$('#effects_bar').toggle(1000);
		if (document.getElementById('efcts_butt_1').style.display=="none")
		{
			document.getElementById('efcts_butt_1').style.display='inline-flex';
			document.getElementById('efcts_butt_2').style.display='none';
		}
	else
		{
			document.getElementById('efcts_butt_1').style.display="none";
			document.getElementById('efcts_butt_2').style.display="inline-flex";
		}
});

$(document).on('click','.fireworks', function(){
	$('#fireworks_bar').toggle(1000);
		if (document.getElementById('fireworks_butt_1').style.display=="none")
		{
			document.getElementById('fireworks_butt_1').style.display='inline-flex';
			document.getElementById('fireworks_butt_2').style.display='none';
		}
	else
		{
			document.getElementById('fireworks_butt_1').style.display="none";
			document.getElementById('fireworks_butt_2').style.display="inline-flex";
		}
});

$(document).on('click','.shw', function(){
	$('#show_bar').toggle(1000);
	if (document.getElementById('shows_butt_1').style.display=="none")
		{
			document.getElementById('shows_butt_1').style.display='inline-flex'; 
			document.getElementById('shows_butt_2').style.display='none';
		}
	else
		{
			document.getElementById('shows_butt_1').style.display="none";
			document.getElementById('shows_butt_2').style.display="inline-flex";
		}
});

$(document).on('click','.photzn', function(){
	$('#photozone_bar').toggle(1000);
	if (document.getElementById('ptzone_butt_1').style.display=="none")
		{
			document.getElementById('ptzone_butt_1').style.display='inline-flex'; 
			document.getElementById('ptzone_butt_2').style.display='none';
		}
	else
		{
			document.getElementById('ptzone_butt_1').style.display="none";
			document.getElementById('ptzone_butt_2').style.display="inline-flex";
		}
});

$(document).on('click','.interactiv', function(){
	$('#interactiv_bar').toggle(1000);
	if (document.getElementById('interactiv_butt_1').style.display=="none")
		{
			document.getElementById('interactiv_butt_1').style.display='inline-flex'; 
			document.getElementById('interactiv_butt_2').style.display='none';
		}
	else
		{
			document.getElementById('interactiv_butt_1').style.display="none";
			document.getElementById('interactiv_butt_2').style.display="inline-flex";
		}
});






