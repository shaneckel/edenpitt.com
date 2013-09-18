
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


// place any jQuery/helper plugins in here, instead of separate, slower script files.

// Stickyfloat
$.fn.stickyfloat = function(options, lockBottom) {
	var $obj 				= this;
	var parentPaddingTop 	= parseInt($obj.parent().css('padding-top'));
	var startOffset 		= $obj.parent().offset().top;
	var opts 				= $.extend({ startOffset: startOffset, offsetY: parentPaddingTop, duration: 200, lockBottom:true }, options);
	
	$obj.css({ position: 'absolute' });
	
	if(opts.lockBottom){
		var bottomPos = $obj.parent().height() - $obj.height() + parentPaddingTop;
		if( bottomPos < 0 )
			bottomPos = 0;
	}
	
	$(window).scroll(function () { 
		$obj.stop(); 

		var pastStartOffset			= $(document).scrollTop() > opts.startOffset;	
		var objFartherThanTopPos	= $obj.offset().top > startOffset;	
		var objBiggerThanWindow 	= $obj.outerHeight() < $(window).height();	

		if( (pastStartOffset || objFartherThanTopPos) && objBiggerThanWindow ){ 
			var newpos = ($(document).scrollTop() -startOffset + opts.offsetY );
			if ( newpos > bottomPos )
				newpos = bottomPos;
			if ( $(document).scrollTop() < opts.startOffset ) 
				newpos = parentPaddingTop;

			$obj.animate({ top: newpos }, opts.duration );
		}
	});
};

// Homepage Slider
$.fn.j05Slider = function(options) {

	var defaults = {
		speed : 1000,
		pause : 2000,
		transition : 'slide'
	},
	
	// Take the options that the user selects and merge them with defaults
	options = $.extend(defaults, options);
	if(options.pause <= options.speed) options.pause = options.speed + 100;	
	
	return this.each(function() {

		// Cache "this."
		var $this = $(this);
		$this.wrap('<div class="slider-wrap" />');
		
		$this.css({
			'width' : '99999px',
			'position' : 'relative',
			'padding' : 0
		});
		
		if(options.transition === 'slide') {
			$this.children().css({
				'float' : 'left'
			});
			
			$('.slider-wrap').css({
				'width' : $this.children().width(),
				'height' : $this.children().height(),
				'overflow' : 'hidden',
				'marginTop' : '-70px'
			});				
		}	
		
		if(options.transition === 'slide') slideLeft();	
					
		function slideLeft() {
			setInterval(function() {

				$this.stop().animate({'left' : '-' + $this.parent().width()}, options.speed, function() {
					$this
					   .css('left', 0)
					   .children(':first')
					   // Seat's taken. Move it on back.
					   .appendTo($this); 
				})
			}, options.pause);
		}					
			
	}); 		

} 

