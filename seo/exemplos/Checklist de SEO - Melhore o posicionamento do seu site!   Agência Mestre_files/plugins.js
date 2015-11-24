//Easing ****************************************************************/

jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});




//jQuery Waypoints ****************************************************************/ 

(function(){var t=[].indexOf||function(t){for(var e=0,n=this.length;e<n;e++){if(e in this&&this[e]===t)return e}return-1},e=[].slice;(function(t,e){if(typeof define==="function"&&define.amd){return define("waypoints",["jquery"],function(n){return e(n,t)})}else{return e(t.jQuery,t)}})(this,function(n,r){var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;i=n(r);c=t.call(r,"ontouchstart")>=0;s={horizontal:{},vertical:{}};f=1;a={};u="waypoints-context-id";p="resize.waypoints";y="scroll.waypoints";v=1;w="waypoints-waypoint-ids";g="waypoint";m="waypoints";o=function(){function t(t){var e=this;this.$element=t;this.element=t[0];this.didResize=false;this.didScroll=false;this.id="context"+f++;this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()};this.waypoints={horizontal:{},vertical:{}};t.data(u,this.id);a[this.id]=this;t.bind(y,function(){var t;if(!(e.didScroll||c)){e.didScroll=true;t=function(){e.doScroll();return e.didScroll=false};return r.setTimeout(t,n[m].settings.scrollThrottle)}});t.bind(p,function(){var t;if(!e.didResize){e.didResize=true;t=function(){n[m]("refresh");return e.didResize=false};return r.setTimeout(t,n[m].settings.resizeThrottle)}})}t.prototype.doScroll=function(){var t,e=this;t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){n[m]("refresh")}n.each(t,function(t,r){var i,o,l;l=[];o=r.newScroll>r.oldScroll;i=o?r.forward:r.backward;n.each(e.waypoints[t],function(t,e){var n,i;if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){return l.push(e)}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){return l.push(e)}});l.sort(function(t,e){return t.offset-e.offset});if(!o){l.reverse()}return n.each(l,function(t,e){if(e.options.continuous||t===l.length-1){return e.trigger([i])}})});return this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}};t.prototype.refresh=function(){var t,e,r,i=this;r=n.isWindow(this.element);e=this.$element.offset();this.doScroll();t={horizontal:{contextOffset:r?0:e.left,contextScroll:r?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:r?0:e.top,contextScroll:r?0:this.oldScroll.y,contextDimension:r?n[m]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};return n.each(t,function(t,e){return n.each(i.waypoints[t],function(t,r){var i,o,l,s,f;i=r.options.offset;l=r.offset;o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];if(n.isFunction(i)){i=i.apply(r.element)}else if(typeof i==="string"){i=parseFloat(i);if(r.options.offset.indexOf("%")>-1){i=Math.ceil(e.contextDimension*i/100)}}r.offset=o-e.contextOffset+e.contextScroll-i;if(r.options.onlyOnScroll&&l!=null||!r.enabled){return}if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){return r.trigger([e.backward])}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){return r.trigger([e.forward])}else if(l===null&&e.oldScroll>=r.offset){return r.trigger([e.forward])}})})};t.prototype.checkEmpty=function(){if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){this.$element.unbind([p,y].join(" "));return delete a[this.id]}};return t}();l=function(){function t(t,e,r){var i,o;r=n.extend({},n.fn[g].defaults,r);if(r.offset==="bottom-in-view"){r.offset=function(){var t;t=n[m]("viewportHeight");if(!n.isWindow(e.element)){t=e.$element.height()}return t-n(this).outerHeight()}}this.$element=t;this.element=t[0];this.axis=r.horizontal?"horizontal":"vertical";this.callback=r.handler;this.context=e;this.enabled=r.enabled;this.id="waypoints"+v++;this.offset=null;this.options=r;e.waypoints[this.axis][this.id]=this;s[this.axis][this.id]=this;i=(o=t.data(w))!=null?o:[];i.push(this.id);t.data(w,i)}t.prototype.trigger=function(t){if(!this.enabled){return}if(this.callback!=null){this.callback.apply(this.element,t)}if(this.options.triggerOnce){return this.destroy()}};t.prototype.disable=function(){return this.enabled=false};t.prototype.enable=function(){this.context.refresh();return this.enabled=true};t.prototype.destroy=function(){delete s[this.axis][this.id];delete this.context.waypoints[this.axis][this.id];return this.context.checkEmpty()};t.getWaypointsByElement=function(t){var e,r;r=n(t).data(w);if(!r){return[]}e=n.extend({},s.horizontal,s.vertical);return n.map(r,function(t){return e[t]})};return t}();d={init:function(t,e){var r;if(e==null){e={}}if((r=e.handler)==null){e.handler=t}this.each(function(){var t,r,i,s;t=n(this);i=(s=e.context)!=null?s:n.fn[g].defaults.context;if(!n.isWindow(i)){i=t.closest(i)}i=n(i);r=a[i.data(u)];if(!r){r=new o(i)}return new l(t,r,e)});n[m]("refresh");return this},disable:function(){return d._invoke(this,"disable")},enable:function(){return d._invoke(this,"enable")},destroy:function(){return d._invoke(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e>0){return t.push(n[e-1])}})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e<n.length-1){return t.push(n[e+1])}})},_traverse:function(t,e,i){var o,l;if(t==null){t="vertical"}if(e==null){e=r}l=h.aggregate(e);o=[];this.each(function(){var e;e=n.inArray(this,l[t]);return i(o,e,l[t])});return this.pushStack(o)},_invoke:function(t,e){t.each(function(){var t;t=l.getWaypointsByElement(this);return n.each(t,function(t,n){n[e]();return true})});return this}};n.fn[g]=function(){var t,r;r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(d[r]){return d[r].apply(this,t)}else if(n.isFunction(r)){return d.init.apply(this,arguments)}else if(n.isPlainObject(r)){return d.init.apply(this,[null,r])}else if(!r){return n.error("jQuery Waypoints needs a callback function or handler option.")}else{return n.error("The "+r+" method does not exist in jQuery Waypoints.")}};n.fn[g].defaults={context:r,continuous:true,enabled:true,horizontal:false,offset:0,triggerOnce:false};h={refresh:function(){return n.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return(t=r.innerHeight)!=null?t:i.height()},aggregate:function(t){var e,r,i;e=s;if(t){e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0}if(!e){return[]}r={horizontal:[],vertical:[]};n.each(r,function(t,i){n.each(e[t],function(t,e){return i.push(e)});i.sort(function(t,e){return t.offset-e.offset});r[t]=n.map(i,function(t){return t.element});return r[t]=n.unique(r[t])});return r},above:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return h._invoke("enable")},disable:function(){return h._invoke("disable")},destroy:function(){return h._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;e=n.extend({},s.vertical,s.horizontal);return n.each(e,function(e,n){n[t]();return true})},_filter:function(t,e,r){var i,o;i=a[n(t).data(u)];if(!i){return[]}o=[];n.each(i.waypoints[e],function(t,e){if(r(i,e)){return o.push(e)}});o.sort(function(t,e){return t.offset-e.offset});return n.map(o,function(t){return t.element})}};n[m]=function(){var t,n;n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(h[n]){return h[n].apply(null,t)}else{return h.aggregate.call(null,n)}};n[m].settings={resizeThrottle:100,scrollThrottle:30};return i.load(function(){return n[m]("refresh")})})}).call(this);


//FixedScrollLayout ****************************************************************/
$(window).scroll(function () {
    
  var scrollTop = $(this).scrollTop();
  if(scrollTop == 0) {
   $("#cbp-fbscroller > nav > div > ul:first > li").each(function() {
   $(this).children().removeClass("cbp-fbcurrent");
  });
  }
});

	var cbpFixedScrollLayout = (function () {
        var a = {
            $sections: $("#cbp-fbscroller > div > section"),
            $navlinks: $("#cbp-fbscroller > nav > div > ul:first > li"),
            $buttons: $("a.scroll-icon"),
            currentLink: 0,
            $body: $("html, body"),
            animspeed: 2000,
            animeasing: "easeInOutExpo"
        };

        function d() {

			a.$buttons.on("click", function () {

            		var href = $(this).attr("href").replace("#","");
            		a.$sections.each(function() {
						if($(this).attr("id") == href) {
							c($(this).offset().top);
						}
					});

                    return false
            });

            a.$navlinks.on("click", function () {

            		console.log($(this).index());

                    c(a.$sections.eq($(this).index()).offset().top);
                    return false
                });
            a.$sections.waypoint(function (e) {
                    if (e === "down") {
                        b($(this))
                    }
                }, {
                    offset: "30%"
                }).waypoint(function (e) {
                    if (e === "up") {
                        b($(this))
                    }
                }, {
                    offset: "-30%"
                });
            $(window).on("debouncedresize", function () {
                    c(a.$sections.eq(a.currentLink).offset().top)
                })
        }

        function b(e) {

			if( e.index("section") <= a.currentLink ) {
				a.$navlinks.eq(a.currentLink).children().removeClass("cbp-fbcurrent");
			}
		   
		   	a.currentLink = e.index("section");
			a.$navlinks.eq(a.currentLink).children().addClass("cbp-fbcurrent");

        }

        function c(e) {
            a.$body.stop().animate({
                    scrollTop: e
                }, a.animspeed, a.animeasing)
        }
        return {
            init: d
        }
    })();
	
	
//Scrollorama ****************************************************************/
(function($) {

	$.superscrollorama = function(options) {

		var superscrollorama = this;
		var defaults = {
			isVertical:true,		// are we scrolling vertically or horizontally?
			triggerAtCenter: true,	// the animation triggers when the respective Element's origin is in the center of the scrollarea. This can be changed here to be at the edge (-> false)
			playoutAnimations: true,	// when scrolling past the animation should they be played out (true) or just be jumped to the respective last frame (false)? Does not affect animations where duration = 0
			reverse: true			// make reverse configurable so you don't have to pass it in for every tween to reverse globally
		};
		superscrollorama.settings = $.extend({}, defaults, options);
        var $window = $(window);

		// PRIVATE VARS

		var animObjects = [],
			pinnedObjects = [],
			scrollContainerOffset = {x: 0, y: 0},
			doUpdateOnNextTick = false;

		// PRIVATE FUNCTIONS

		function init() {
			// set event handlers
			$window.scroll(function() {
				doUpdateOnNextTick = true;
			});
			TweenLite.ticker.addEventListener("tick", tickHandler);
		}

		function cssNumericPosition ($elem) { // return 0 when value is auto
			var obj = {
				top: parseFloat($elem.css("top")),
				left: parseFloat($elem.css("left"))
			};
			if (isNaN(obj.top)) {
				obj.top = 0;
			}
			if (isNaN(obj.left)) {
				obj.left = 0;
			}
			return obj;
		}

		function tickHandler() {
			if (doUpdateOnNextTick) {
				checkScrollAnim();
				doUpdateOnNextTick = false;
			}
		}

		// reset a pin Object
		function resetPinObj (pinObj) {
			pinObj.el.css('position', pinObj.origPositioning.pos);
			pinObj.el.css('top', pinObj.origPositioning.top);
			pinObj.el.css('left', pinObj.origPositioning.left);
		}
		// set a Tween Progress (use totalProgress for TweenMax and TimelineMax to include repeats)
		function setTweenProgress(tween, progress) {
			if (tween) {
				if (tween.totalProgress) {
					tween.totalProgress(progress).pause();
				} else {
					tween.progress(progress).pause();
				}
			}
		}

		function checkScrollAnim() {
			var currScrollPoint = superscrollorama.settings.isVertical ? $window.scrollTop() + scrollContainerOffset.y :  $window.scrollLeft() + scrollContainerOffset.x;
			var offsetAdjust = superscrollorama.settings.triggerAtCenter ? (superscrollorama.settings.isVertical ? -$window.height()/2 : -$window.width()/2) : 0;
			var i, startPoint, endPoint;

			// check all animObjects
			var numAnim = animObjects.length;
			for (i=0; i<numAnim; i++) {
				var animObj = animObjects[i],
					target = animObj.target,
					offset = animObj.offset;

				if (typeof(target) === 'string') {
                    var targetOffset = $(target).offset();
					startPoint = superscrollorama.settings.isVertical ? targetOffset.top + scrollContainerOffset.y : targetOffset.left + scrollContainerOffset.x;
					offset += offsetAdjust;
				} else if (typeof(target) === 'number')	{
					startPoint = target;
				} else if ($.isFunction(target)) {
					startPoint = target.call(this);
				} else {
                    var targetOffset = target.offset();
                    startPoint = superscrollorama.settings.isVertical ? targetOffset.top + scrollContainerOffset.y : targetOffset.left + scrollContainerOffset.x;
					offset += offsetAdjust;
				}

				startPoint += offset;
				endPoint = startPoint + animObj.dur; // if the duration is 0 the animation should autoplay (forward going from BEFORE to AFTER and reverse going from AFTER to BEFORE)

				if ((currScrollPoint > startPoint && currScrollPoint < endPoint) && animObj.state !== 'TWEENING') {
					// if it should be TWEENING and isn't..
					animObj.state = 'TWEENING';
					animObj.start = startPoint;
					animObj.end = endPoint;
				}
				if (currScrollPoint < startPoint && animObj.state !== 'BEFORE' && animObj.reverse) {
					// if it should be at the BEFORE tween state and isn't..
					if (superscrollorama.settings.playoutAnimations || animObj.dur === 0) {
						animObj.tween.reverse();
					} else {
						setTweenProgress(animObj.tween, 0);
					}
					animObj.state = 'BEFORE';
				} else if (currScrollPoint > endPoint && animObj.state !== 'AFTER') {
					// if it should be at the AFTER tween state and isn't..
					if (superscrollorama.settings.playoutAnimations || animObj.dur === 0) {
						animObj.tween.play();
					} else {
						setTweenProgress(animObj.tween, 1);
					}
					animObj.state = 'AFTER';
				} else if (animObj.state === 'TWEENING') {
					// if it is TWEENING..
					var repeatIndefinitely = false;
					if (animObj.tween.repeat) // does the tween even have the repeat option (TweenMax / TimelineMax)
						repeatIndefinitely = (animObj.tween.repeat() == -1);

					if (repeatIndefinitely) { // if the animation loops indefinitely it will just play for the time of the duration
						var playheadPosition = animObj.tween.totalProgress(); // there is no "isPlaying" value so we need to save the playhead to determin wether the animation is running
						if (animObj.playeadLastPosition === null || playheadPosition === animObj.playeadLastPosition) {
							if (playheadPosition == 1) {
								if (animObj.tween.yoyo()) // reverse Playback with infinitely looped tweens only works with yoyo true
									animObj.tween.reverse();
								else
									animObj.tween.totalProgress(0).play();
							} else {
								animObj.tween.play();
							}
						}
						animObj.playeadLastPosition = playheadPosition;
					} else {
						setTweenProgress(animObj.tween, (currScrollPoint - animObj.start)/(animObj.end - animObj.start));
					}
				}
			}

			// check all pinned elements
			var numPinned = pinnedObjects.length;
			for (i=0; i<numPinned; i++) {
				var pinObj = pinnedObjects[i];
				var el = pinObj.el;

				// should object be pinned (or updated)?
				if (pinObj.state != 'PINNED') {

					if (pinObj.state === 'UPDATE') resetPinObj(pinObj); // revert to original Position so startPoint and endPoint will be calculated to the correct values


					startPoint = superscrollorama.settings.isVertical ? pinObj.spacer.offset().top + scrollContainerOffset.y : pinObj.spacer.offset().left + scrollContainerOffset.x;

					startPoint += pinObj.offset;

					endPoint = startPoint + pinObj.dur;

					var jumpedPast = ((currScrollPoint > endPoint && pinObj.state === 'BEFORE') || (currScrollPoint < startPoint && pinObj.state === 'AFTER')); // if we jumped past a pinarea (i.e. when refreshing or using a function) we need to temporarily pin the element so it gets positioned to start or end respectively
					var inPinAra = (currScrollPoint > startPoint && currScrollPoint < endPoint);
					if (inPinAra || jumpedPast) {
						// set original position values for unpinning
						if (pinObj.pushFollowers && el.css('position') == "static") { // this can't be. If we want to pass following elements we need to at least allow relative positioning
							el.css('position', "relative");
						}
						// save original positioning
						pinObj.origPositioning = {
							pos: el.css('position'),
							top: pinObj.spacer.css('top'),
							left: pinObj.spacer.css('left')
						};
						// change to fixed position
						pinObj.fixedPositioning = {
							top: superscrollorama.settings.isVertical ? -pinObj.offset : pinObj.spacer.offset().top,
							left: superscrollorama.settings.isVertical ? pinObj.spacer.offset().left : -pinObj.offset
						};
						el.css('position','fixed');
						el.css('top', pinObj.fixedPositioning.top);
						el.css('left', pinObj.fixedPositioning.left);

						// save values
						pinObj.pinStart = startPoint;
						pinObj.pinEnd = endPoint;

						// If we want to push down following Items we need a spacer to do it, while and after our element is fixed.
						if (pinObj.pushFollowers) {
							if (superscrollorama.settings.isVertical) {
									pinObj.spacer.height(pinObj.dur + el.outerHeight());
							} else {
									pinObj.spacer.width(pinObj.dur + el.outerWidth());
							}
						} else {
							if (pinObj.origPositioning.pos === "absolute") { // no spacer
								pinObj.spacer.width(0);
								pinObj.spacer.height(0);
							} else { // spacer needs to reserve the elements space, while pinned
								if (superscrollorama.settings.isVertical) {
									pinObj.spacer.height(el.outerHeight());
								} else {
									pinObj.spacer.width(el.outerWidth());
								}
							}
						}


						if (pinObj.state === "UPDATE") {
							if (pinObj.anim)
								setTweenProgress(pinObj.anim, 0); // reset the progress, otherwise the animation won't be updated to the new position
						} else if (pinObj.onPin) {
							pinObj.onPin(pinObj.state === "AFTER");
						}

						// pin it!
						pinObj.state = 'PINNED';
					}
				}
				// If state changed to pinned (or already was) we need to position the element
				if (pinObj.state === 'PINNED') {
					// Check to see if object should be unpinned
					if (currScrollPoint < pinObj.pinStart || currScrollPoint > pinObj.pinEnd) {
						// unpin it
						var before = currScrollPoint < pinObj.pinStart;
						pinObj.state = before ? 'BEFORE' : 'AFTER';
						// set Animation to end or beginning
						setTweenProgress(pinObj.anim, before ? 0 : 1);

						var spacerSize = before ? 0 : pinObj.dur;

						if (superscrollorama.settings.isVertical) {
							pinObj.spacer.height(pinObj.pushFollowers ? spacerSize : 0);
						} else {
							pinObj.spacer.width(pinObj.pushFollowers ? spacerSize : 0);
						}

						// correct values if pin Object was moved (animated) during PIN (pinObj.el.css values will never be auto as they are set by the class)
						var deltay = pinObj.fixedPositioning.top - cssNumericPosition(pinObj.el).top;
						var deltax = pinObj.fixedPositioning.left - cssNumericPosition(pinObj.el).left;

						// first revert to start values
						resetPinObj(pinObj);

						// position element correctly
						if (!pinObj.pushFollowers || pinObj.origPositioning.pos == "absolute") {
							var pinOffset;

							if (pinObj.origPositioning.pos == "relative") { // position relative and pushFollowers = false
								pinOffset = superscrollorama.settings.isVertical ?
											parseFloat(pinObj.origPositioning.top) :
											parseFloat(pinObj.origPositioning.left);
								if (isNaN(pinOffset)) { // if Position was "auto" parseFloat will result in NaN
									pinOffset = 0;
								}
							} else {
								pinOffset = superscrollorama.settings.isVertical ?
											pinObj.spacer.position().top :
											pinObj.spacer.position().left;
							}

							var direction = superscrollorama.settings.isVertical ?
											"top" :
											"left";

							pinObj.el.css(direction, pinOffset + spacerSize);
						} // if position relative and pushFollowers is true the element remains untouched.

						// now correct values if they have been changed during pin
						if (deltay !== 0) {
							pinObj.el.css("top", cssNumericPosition(pinObj.el).top - deltay);
						}
						if (deltax !== 0) {
							pinObj.el.css("left", cssNumericPosition(pinObj.el).left - deltax);
						}

						if (pinObj.onUnpin)
							pinObj.onUnpin(!before);
					} else if (pinObj.anim) {
						// do animation
						setTweenProgress(pinObj.anim, (currScrollPoint - pinObj.pinStart)/(pinObj.pinEnd - pinObj.pinStart));
					}
				}
			}
		}

		// PUBLIC FUNCTIONS
		superscrollorama.addTween = function(target, tween, dur, offset, reverse) {

			tween.pause();

			animObjects.push({
				target:target,
				tween: tween,
				offset: offset || 0,
				dur: dur || 0,
				reverse: (typeof reverse !== "undefined") ? reverse : superscrollorama.settings.reverse, // determine if reverse animation has been disabled
				state:'BEFORE'
			});

			return superscrollorama;
		};

		superscrollorama.pin = function(el, dur, vars) {
			if (typeof(el) === 'string') el = $(el);
			var defaults = {
				offset: 0,
				pushFollowers: true		// if true following elements will be "pushed" down, if false the pinned element will just scroll past them
			};
			vars = $.extend({}, defaults, vars);
			if (vars.anim) vars.anim.pause();

			var spacer = $('<div class="superscrollorama-pin-spacer"></div>');
			spacer.css("position", "relative");
			spacer.css("top", el.css("top"));
			spacer.css("left", el.css("left"));
			el.before(spacer);

			pinnedObjects.push({
				el:el,
				state:'BEFORE',
				dur:dur,
				offset: vars.offset,
				anim:vars.anim,
				pushFollowers:vars.pushFollowers,
				spacer:spacer,
				onPin:vars.onPin,
				onUnpin:vars.onUnpin
			});

			return superscrollorama;
		};

		superscrollorama.updatePin = function (el, dur, vars) { // Update a Pinned object. dur and vars are optional to only change vars and keep dur just pass NULL for dur
			if (typeof(el) === 'string') el = $(el);
			if (vars.anim) vars.anim.pause();
			var numPinned = pinnedObjects.length;

			for (i=0; i<numPinned; i++) {
				var pinObj = pinnedObjects[i];
				if (el.get(0) == pinObj.el.get(0)) {

					if (dur) pinObj.dur = dur;
					if (vars.anim) pinObj.anim = vars.anim;
					if (vars.offset) pinObj.offset = vars.offset;
					if (typeof vars.pushFollowers !== "undefined") {
						pinObj.pushFollowers = vars.pushFollowers;
					}
					if (vars.onPin) pinObj.onPin = vars.onPin;
					if (vars.onUnpin) pinObj.onUnpin = vars.onUnpin;

					if ((dur || vars.anim || vars.offset) && pinObj.state === 'PINNED') { // this calls for an immediate update!
						pinObj.state = 'UPDATE';
						checkScrollAnim();
					}
				}
			}

			return superscrollorama;
		};
		
		superscrollorama.removeTween = function (target, tween, reset) {
			var count = animObjects.length;
			if (typeof reset === "undefined") reset = true;
			for (var index = 0; index < count; index++) {
				var value = animObjects[index];
				if (value.target == target &&
					(!tween || value.tween == tween)) { // tween is optional. if not set just remove element
					animObjects.splice(index,1);
					if (reset) {
						setTweenProgress(value.tween, 0);
					}
					count--;
					index--;
				}
			}
			
			return superscrollorama;
		}
		
		superscrollorama.removePin = function (el, reset) {
			if (typeof(el) === 'string') el = $(el);
			if (typeof reset === "undefined") reset = true;
			var count = pinnedObjects.length;
			for (var index = 0; index < count; index++) {
				var value = pinnedObjects[index];
				if (value.el.is(el)) {
					pinnedObjects.splice(index,1);
					if (reset) {
						value.spacer.remove();
						resetPinObj(value);
						if (value.anim) {
							setTweenProgress(value.anim, 0);
						}
					}
					count--;
					index--;
				}
			}
			
			return superscrollorama;
		}

		superscrollorama.setScrollContainerOffset = function (x, y) {
			scrollContainerOffset.x = x;
			scrollContainerOffset.y = y;
			return superscrollorama;
		};

		superscrollorama.triggerCheckAnim = function (immediately) { // if immedeately is true it will be updated right now, if false it will wait until next tweenmax tick. default is false
			if (immediately) {
				checkScrollAnim();
			} else {
				doUpdateOnNextTick = true;
			}
			return superscrollorama;
		};


		// INIT
		init();

		return superscrollorama;
	};

})(jQuery);
