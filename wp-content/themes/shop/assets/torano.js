(function(){
	var slider=document.querySelector('.tn-slider');
	if(!slider) return;
	var slides=[].slice.call(slider.querySelectorAll('.tn-slide'));
	var dots=[].slice.call(slider.querySelectorAll('.tn-dots button'));
	var idx=0, timer=null, interval=parseInt(slider.getAttribute('data-interval')||'5000',10);
	function go(i){
		idx=(i+slides.length)%slides.length;
		slides.forEach(function(s,j){ s.classList.toggle('is-active', j===idx); });
		dots.forEach(function(d,j){ d.classList.toggle('is-active', j===idx); d.setAttribute('aria-selected', j===idx?'true':'false'); });
	}
	function next(){ go(idx+1); }
	function autoplay(){ if(timer) clearInterval(timer); if(slider.getAttribute('data-autoplay')==='true'){ timer=setInterval(next, interval); } }
	dots.forEach(function(d,i){ d.addEventListener('click', function(){ go(i); autoplay(); }); });
	go(0); autoplay();
})(); 