function textEscribe(txt, selector, time)
	 {
	  $(selector).empty();
	  var x = 0; pos = 0;
	  var tl = new textLista
	    ( 
	     txt
	    );
	  var l = tl[0].length;
	  textInterval(selector, tl, l, x, pos, time);
	 }

	 function textLista()
	 {
	   max = textLista.arguments.length;
	   for (i = 0; i < max; i++)
	  this[i] = textLista.arguments[i];
	 }

	 function textInterval(selector, tl, l, x, pos, time)
	 { 
	   var intervalo =
	   setInterval(function() {
	   $(selector).html(tl[x].substring(0,pos));
	   if(pos++ == l) 
	    clearInterval(intervalo);
	   }, time);
	}