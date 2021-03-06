//http://127.0.0.1/awards/beyondd-awards/public/index

var BDV = (function() {

	vote = {


		init: function(){

			$('.result').hide();
			
			var v = $('#vote-form').validate({
				submitHandler: function(form){
	
					$.ajax({
					  type: "POST",
					  url: $(form).attr('action'),
					  data: { _email: $('#email').val() },
					  success: function(result){
					  	if(result.success){
					  		console.log(result.result);
					  		$('.user_id').each(function(){
					  			$(this).val(result.result);
					  		});
					  		$('.carousel').carousel('next');
					  		$('.nominee').show();
					  	}else if(result.unanswered){
					  		$('.carousel').carousel(result.unanswered);
					  		$('.user_id').each(function(){
					  			$(this).val(result.result);
					  		});
					  		$('.nominee').show();
					  	}else{
					  		$(form).find('.result').html('<strong>Warning!</strong> Best check yo self, you have already entered!').show();
					  	}
					  },	
					  dataType: 'json'
					});

					return false;
				},
				highlight: function(element) {
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				success: function(element) {
					$(element).addClass('valid')
					.closest('.form-group').removeClass('has-error').addClass('has-success');
				},
			    ignore: ""
			});


			var awardone = $('.award-form').each(function(){
				$(this).validate({
				submitHandler: function(form){
					var thisForm = "#"+$(form).attr('id');
					$.ajax({
					  type: "POST",
					  url: $(form).attr('action'),
					  data: { _name: $(thisForm+' .name').val(), _id: $(thisForm+' .user_id').val(), _award: $(thisForm+' [name="award"]').val() },
					  success: function(result){
					  	if(result.success){
					  		console.log(result);
					  		$('.user_id').each(function(){
					  			$(this).val(result.result);
					  		});
					  		$('.carousel').carousel('next');
					  	}else if(!result.name){
					  		$(form).find('.result').html('<strong>Oh snap!</strong> You have entered an invalid Name, please select a name from below and try again').show();
					  	}else{
					  		$(form).find('.result').html('<strong>Warning!</strong> Best check yo self, you have already voted!').show();
					  	}
					  },	
					  dataType: 'json'
					});

					return false;
				},
				highlight: function(element) {
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				success: function(element) {
					$(element).addClass('valid')
					.closest('.form-group').removeClass('has-error').addClass('has-success');
				},
			    ignore: ""
			});
				});


			$.validator.addClassRules({
		        num: {
		            number: true
		        }
		    });

		}
	}
	return {
		
		run: function(){
			vote.init();
			
		}

	};
	
})();

/**
 * Run this stuff
 *
 */
$(window).load(function(){  
	BDV.run();
}); 

