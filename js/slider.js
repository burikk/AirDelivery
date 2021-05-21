var number = Math.floor(Math.random()*4)+1;
		var timer1 = 0;
		var timer2 = 0;
		function getslajd(nrslide)
		{
			clearTimeout(timer1);
			clearTimeout(timer2);
			number = nrslide - 1;
			close_slide();
			setTimeout("changeslide()",500);
		}
		
		function close_slide()
		{
			$("#slider").fadeOut(500);
		}
		function changeslide()
		{
			number++; if (number>4) number=1;
			
			var file= "<img src=\"images/plain" + number +".jpg\" />";
		
			document.getElementById("slider").innerHTML = file;
			$("#slider").fadeIn(500);
			
			timer1 = setTimeout("changeslide()",5000);
			timer2 = setTimeout("close_slide()",4500);
		}