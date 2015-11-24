
		jQuery.fn.toggleText = function(a,b) {
		return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
		}

		$(document).ready(function(){
			/*$('.tgl').before('<span>Revelar conteÃºdo</span>');*/
			$('.agenda').css('display', 'none')
			$('span', '#diario').click(function() {
				$(this).next().slideToggle('slow')
				.siblings('.agenda:visible').slideToggle('fast');
			
				$(this).toggleText('Revelar','Esconder')
				.siblings('span').next('.agenda:visible').prev()
				.toggleText('Revelar','Esconder')
			});
		})
	