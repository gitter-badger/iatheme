jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});
	
	$('[data-toggle=dropdown]').each(function() {
 this.addEventListener('click', function() {}, false);
});

	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
//	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),

			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
		});
	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
	
	
	
	
//ziadost NPPOS II

$(document).ready(function(){

	//odstrani chybne oznacenia
	$(document).on('change',"input",function() {
		$("#check").removeClass("tlacitckoprichybe");
		$(this).parents("div.form-group").removeClass("has-error");
		$(this).parents("div.form-group").removeClass("has-success has-feedback");
		$(this).parents("div.form-group").children(".help-block.with-errors").remove();
	});

    $("#check").click(function(e){
		
        var ico = $("#ico_test").val();  
        var dataString = 'ico_test='+ ico;
		
		$(".uvod").fadeOut();
		if(ico=='')
        {
			$(".appended").html('');
			
			//console.log($(".ico_test").parent('div'));
			$(this).parent().find(".form-group").addClass("has-error");
			
			if($(this).parent().find(".form-group").children(".help-block.with-errors").length == 0) {
				$(this).parent().find(".form-group").append('<span class="help-block with-errors">Musíte vyplniť IČO.</span>');
			}
			$(this).addClass("tlacitckoprichybe");
        }else{

            $.ajax({
                type: "POST",
                url: "/api/pos2_check.php",
                data: dataString,
                cache: false,
				beforeSend: function() {
					$("#check").html('<i class="fa fa-refresh fa-spin"></i> Overujem');
					},
				complete: function() {
					$("#check").html('<i class="fa fa-refresh"></i> Overiť');
					},
                success: function(result){
					$("#chyby").html('');
                    $(".appended").hide().html('');
                    $(".formular").append(result);
					$(".appended").hide().fadeIn('slow');
                }
            });
        }
		e.preventDefault();
        return false;
    });

	
	$(document).on('change', '.ko',function() {
		//$('#check').prop('disabled', true);
    }); 
	
	

	
	//odoslanie formulara
	 $(document).on('click','#send',function (e) {
		var formular = $("#ziadostpos2").serialize();
		//console.log(formular);
		
		$.ajax({
                type: "POST",
                url: "/api/pos2_send.php",
                data: formular,
                cache: false,
				async: true,
				beforeSend: function() {
					$("#send").html('<i class="fa fa-refresh fa-spin"></i> Odosielam');
					},
                success: function(result){
					if(result.status == 'error'){
						for (var key in result['error']) {
							var value = result['error'][key];
							
							$('input[name='+key+']').parents("div.form-group").addClass("has-error");
							$('input[name='+key+']').parents("div.form-group").children(".help-block.with-errors").empty();
							$('input[name='+key+']').parents("div.form-group").append('<span class="help-block with-errors">'+value+'</span>');
							}
							
						for (var key in result['success']) {
							var value = result['success'][key];
							
							$('input[name='+key+']').parents("div.form-group").addClass("has-success has-feedback");
							}
								
					}else{
						$(".appended").html('');
						$(".formular").html(result);
					}
					$("#send").html('<i class="fa fa-paper-plane-o"></i> Odoslať žiadosť'); 	
                }
            });
		e.preventDefault();
	});

	
	
});
		
});
