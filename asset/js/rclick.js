var message=" Thank You \n\ \n\Roopokar\n\ \n\  www.roopokar.com"

function click(e) 
	{
		if (document.all) 
		{
			if (event.button == 2) 
			{
				alert(message);
				return false;
			}
		}
		if (document.layers) 
		{
			if (e.which == 3) 
			{
				alert(message);
				return false;
			}
		}
	}
		if (document.layers) 
		{
			document.captureEvents(Event.MOUSEDOWN);
		}

	document.onmousedown=click;