//Preloader ****************************************************************/
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		})
	
//FixedScrollLayout ****************************************************************/
		$(function() {
				cbpFixedScrollLayout.init();
			});
			
//Scrollorama ****************************************************************/
				
			$(document).ready(function() {
			$('body').css('visibility','visible');
			
			// TimelineLite for title animation, then start up superscrollorama when complete
			(new TimelineLite({onComplete:initScrollAnimations}))
			
			
			//function
			function initScrollAnimations() {
				
				$('#main').css('display','block');
				var controller = $.superscrollorama();
				
				//effects pagerank
				controller.addTween('#fade-pagerank', TweenMax.from( $('#fade-pagerank'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-pagerank").children().attr('src', 'img/gifs/pagerank.gif');}}));
				controller.addTween('#fly-pagerank', TweenMax.from( $('#fly-pagerank'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-pagerank', TweenMax.fromTo( $('#scale-pagerank'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects pagerank
				
				
				// effects title
				controller.addTween('#fade-title', TweenMax.from( $('#fade-title'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-title").children().attr('src', 'img/gifs/title.gif');}}));
				controller.addTween('#fly-title', TweenMax.from( $('#fly-title'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-title', TweenMax.fromTo( $('#scale-title'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects title
				
				
				// effects description
				controller.addTween('#fade-description', TweenMax.from( $('#fade-description'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-description").children().attr('src', 'img/gifs/description.gif');}}));
				controller.addTween('#fly-description', TweenMax.from( $('#fly-description'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-description', TweenMax.fromTo( $('#scale-description'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects description
				
				
				// effects links
				controller.addTween('#fade-links', TweenMax.from( $('#fade-links'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-links").children().attr('src', 'img/gifs/link.gif');}}));
				controller.addTween('#fly-links', TweenMax.from( $('#fly-links'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-links', TweenMax.fromTo( $('#scale-links'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects links
				
				
				// effects urls
				controller.addTween('#fade-urls', TweenMax.from( $('#fade-urls'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-urls").children().attr('src', 'img/gifs/urls.gif');}}));
				controller.addTween('#fly-urls', TweenMax.from( $('#fly-urls'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-urls', TweenMax.fromTo( $('#scale-urls'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects urls
				
				
				// effects canonicas
				controller.addTween('#fade-canonicas', TweenMax.from( $('#fade-canonicas'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-canonicas").children().attr('src', 'img/gifs/urls-canonicas.gif');}}));
				controller.addTween('#fly-canonicas', TweenMax.from( $('#fly-canonicas'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-canonicas', TweenMax.fromTo( $('#scale-canonicas'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects canonicas
				
				
				// effects headings
				controller.addTween('#fade-headings', TweenMax.from( $('#fade-headings'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-headings").children().attr('src', 'img/gifs/heading-tags.gif');}}));
				controller.addTween('#fly-headings', TweenMax.from( $('#fly-headings'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-headings', TweenMax.fromTo( $('#scale-headings'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects headings
				
				
				// effects imagens
				controller.addTween('#fade-imagens', TweenMax.from( $('#fade-imagens'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-imagens").children().attr('src', 'img/gifs/images.gif');}}));
				controller.addTween('#fly-imagens', TweenMax.from( $('#fly-imagens'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-imagens', TweenMax.fromTo( $('#scale-imagens'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects imagens
				
				
				// effects breadcrumb
				controller.addTween('#fade-breadcrumb', TweenMax.from( $('#fade-breadcrumb'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-breadcrumb").children().attr('src', 'img/gifs/breadcrumb.gif');}}));
				controller.addTween('#fly-breadcrumb', TweenMax.from( $('#fly-breadcrumb'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-breadcrumb', TweenMax.fromTo( $('#scale-breadcrumb'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects breadcrumb
				
				
				// effects sitemap
				controller.addTween('#fade-sitemap', TweenMax.from( $('#fade-sitemap'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-sitemap").children().attr('src', 'img/gifs/sitemap.gif');}}));
				controller.addTween('#fly-sitemap', TweenMax.from( $('#fly-sitemap'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-sitemap', TweenMax.fromTo( $('#scale-sitemap'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects sitemap
				
				
				// effects 404
				controller.addTween('#fade-pagina-404', TweenMax.from( $('#fade-pagina-404'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-pagina-404").children().attr('src', 'img/gifs/404.gif');}}));
				controller.addTween('#fly-pagina-404', TweenMax.from( $('#fly-pagina-404'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-pagina-404', TweenMax.fromTo( $('#scale-pagina-404'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects 404
				
				
				// effects videos
				controller.addTween('#fade-videos', TweenMax.from( $('#fade-videos'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-videos").children().attr('src', 'img/gifs/videos.gif');}}));
				controller.addTween('#fly-videos', TweenMax.from( $('#fly-videos'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-videos', TweenMax.fromTo( $('#scale-videos'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects videos
				
				
				// effects redirecionamento
				controller.addTween('#fade-redirecionamento', TweenMax.from( $('#fade-redirecionamento'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-redirecionamento").children().attr('src', 'img/gifs/redirecionamento.gif');}}));
				controller.addTween('#fly-redirecionamento', TweenMax.from( $('#fly-redirecionamento'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-redirecionamento', TweenMax.fromTo( $('#scale-redirecionamento'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects redirecionamento
				
				
				// effects robots
				controller.addTween('#fade-robots', TweenMax.from( $('#fade-robots'),.5, {css: { opacity: 0 },onComplete: function(){$("#fade-robots").children().attr('src', 'img/gifs/robots.gif');}}));
				controller.addTween('#fly-robots', TweenMax.from( $('#fly-robots'), .25, {css:{right:'1000px', opacity: 0}, ease:Quad.easeInOut}));
				controller.addTween('#scale-robots', TweenMax.fromTo( $('#scale-robots'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'90px'}, ease:Quad.easeInOut}));
				// end effects robots


			}
		});