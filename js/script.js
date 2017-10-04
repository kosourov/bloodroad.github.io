	// Диаграммы
	function chart(num,max,elem,color,total) {
		var drawingCanvas = document.getElementById(elem);
		if(drawingCanvas && drawingCanvas.getContext) {
			var context = drawingCanvas.getContext('2d');
			var size = drawingCanvas.width/2;
			var fill = '#aaa';if(color=='red'){fill="#c8354e";}if(color=='green'){fill="#45da6c";}if(color=='blue'){fill="#45B5DA";}if(color=='yellow'){fill="#FFC870";}

			context.fillStyle = "#000";
			context.strokeStyle = "#000";
			context.beginPath();
			context.arc(size,size,size,0,Math.PI*2,true);
			context.closePath();
			context.fill();

			context.fillStyle = fill;
			context.beginPath();
			context.moveTo(size, size);
			var start=(Math.PI/180)*-90-((Math.PI/180)*num*360/1)/1 
			context.arc(size,size,size,start,start+(Math.PI/180)*num*360/max,false);
			context.closePath();
			context.fill();

			context.fillStyle = "#111113";
			context.beginPath();
			context.arc(size,size,size-4,0,Math.PI*2,true);
			context.closePath();
			context.fill();

			context.fillStyle = "#fff";
			context.font = "20px Tahoma";
			context.textAlign = "center";
			context.textBaseline = 'middle';
			var x=drawingCanvas.width/2;
			var y=drawingCanvas.height/2;
			if(total >= 0){
				context.fillText(total, x,y-6);
				context.font = "12px Tahoma";
				context.fillText('уровень', x,y+9);
			}else{
				context.fillText(num, x,y-6);
				context.font = "12px Tahoma";
				context.fillText('из '+max, x,y+9);
			}
		}
	}
	
	// Alt title
	$(document).ready(function(){
		$('body').prepend('<div id="title" class="c_yellow"></div>');
		$('*[alt]').addClass('titlebar');
		$('.titlebar').mousemove(function(){$('#title').html($(this).attr('alt')).stop(true,true).fadeIn(100);});
		$('.titlebar').mouseout(function(){$('#title').fadeOut(0);});
	});
	ns4 = (document.layers)? true:false
	ie4 = (document.all)? true:false
	function init() {
		if (ns4) {document.captureEvents(Event.MOUSEMOVE);}
		document.onmousemove=mousemove;
	}
	function mousemove(event) {
		var mouse_x = y = 0;
		if (document.attachEvent != null) {
			mouse_x = window.event.clientX;
			mouse_y = window.event.clientY;
		} else if (!document.attachEvent && document.addEventListener) {
			mouse_x = event.clientX;
			mouse_y = event.clientY;
		}
		var client_w = document.body.clientWidth;
		var client_h = document.body.clientHeight;
		var titlebar_w = $('#title').width()+10;
		var titlebar_h = $('#title').height();
		if(mouse_x > client_w-titlebar_w-40){$('#title').css('left',mouse_x-titlebar_w-7);}else{$('#title').css('left',mouse_x+10);}
		if(mouse_y > client_h-titlebar_h-40){$('#title').css('top',mouse_y-titlebar_h-7+$('body').scrollTop());}else{$('#title').css('top',mouse_y+10+$('body').scrollTop());}
	}
	init();
	
	
	function getTimeRemaining(){
		var t = Math.floor(Date.parse(timer_end)/1000)-Math.floor(new Date().getTime()/1000);
		var seconds = Math.floor( t % 60 );
		var minutes = Math.floor( t / 60 % 60 );
		var hours = Math.floor( t / 3600 % 24 );
		var days = Math.floor( t / 24 / 3600 );
		timer(days,50,'d',timer_color,['День','Дня','Дней']);
		timer(hours,24,'h',timer_color,['Час','Часа','Часов']);
		timer(minutes,59,'m',timer_color,['Минута','Минуты','Минут']);
		timer(seconds,59,'s',timer_color,['Секунда','Секунды','Секунд']);
		setTimeout(getTimeRemaining,999);
	}
	function timer(num,max,elem,color,massive) {
		var drawingCanvas = document.getElementById(elem);
		if(drawingCanvas && drawingCanvas.getContext) {
			var context = drawingCanvas.getContext('2d');
			var size = drawingCanvas.width/2;
			var fill = '#aaa';if(color=='red'){fill="#c8354e";}if(color=='green'){fill="#45da6c";}if(color=='blue'){fill="#45B5DA";}if(color=='yellow'){fill="#FFC870";}

			context.fillStyle = "#000";
			context.strokeStyle = "#000";
			context.beginPath();
			context.arc(size,size,size,0,Math.PI*2,true);
			context.closePath();
			context.fill();

			context.fillStyle = fill;
			context.beginPath();
			context.moveTo(size, size);
			var start=(Math.PI/180)*-90-((Math.PI/180)*num*360/1)/1 
			context.arc(size,size,size-1,start,start+(Math.PI/180)*num*360/max,false);
			context.closePath();
			context.fill();

			context.fillStyle = timer_bg[0];
			context.beginPath();
			context.arc(size,size,size-(size/10),0,Math.PI*2,true);
			context.closePath();
			context.fill();
			
			context.fillStyle = timer_bg[1];
			context.font = (size/1.5)+"px Tahoma";
			context.textAlign = "center";
			context.textBaseline = 'middle';
			var x=drawingCanvas.width/2;
			var y=drawingCanvas.height/2;
			context.fillText(num, x,y-9);
			context.font = (size/5)+"px Tahoma";
			context.fillText(dec(num, massive), x,y+(size/2.5));
		}
	}
	function dec(number, titles){cases = [2, 0, 1, 1, 1, 2];  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];}