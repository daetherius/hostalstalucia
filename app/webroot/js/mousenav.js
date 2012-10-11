window.addEvent('domready',function(){
	var acts = $$('.act');
	var dbody = document.body;
	var wScroll = new Fx.Scroll(window, { duration:1300,  link:'cancel', transition:'quad:in:out' });

	var bubbles = $$('.bubble');
	bubbles.each(function(bubble,idx){
		var actH = acts[idx].getSize().y, newTop;
		newTop = (actH*idx) + (actH*idx*1.5) + 30;
		bubble.store('baseTop',newTop).setStyle('top', newTop);
	});

	if(acts.length){
		/* Show Keyboard Navigation Hint*/
		var keynav_count = Cookie.read('keynav');

		if(Cookie.read('keynav') < 2){
			var keynav = new Element('div#keynavigation',{opacity:0});
			keynav.inject(document.body).tween('opacity',1).get('tween').chain(function(){
				this.tween.delay(2400,this,['opacity',0]);
			}.bind(keynav));
		}
		
		if(keynav_count){ Cookie.write('keynav',keynav_count*1+1); } else { Cookie.write('keynav',1); }

		acts[0].addClass('selected');
		window.addEvent('scroll', function(e){
			bubbles.each(function(el){
				el.setStyle('top',el.retrieve('baseTop')-(document.body.getScroll().y*1.5));
			});
		});
		document.body.addEvent('keydown',function(e){
			var ev = new Event(e);
			//console.log();

			if(['up','down'].contains(ev.key)){
				ev.stop();

				var current = $$('.act.selected');
				current = current.length ? current[0] : acts[0];

				if(ev.key == 'up'){
					var next = current.getPrevious('.act');
					if(!next){ return; }

				} else {
					var next = current.getNext('.act');
					if(!next){ return; }

				}

				current.removeClass('selected');
				next.addClass('selected');

				wScroll.toElement(next);
			}
		});
	}
});