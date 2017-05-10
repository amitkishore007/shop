$('document').ready(function(){



	$(".login-btn").on('click',function(e){

		e.preventDefault();
		var email = $('.email').val();
		var password = $('.password').val();
		

		$.ajax({

			url : ajax_url+"admin_login/login",
			type: 'POST',
			data : {'login':'login',email:email,password:password},
			beforeSend :  function(){
				$('.login-loader').show();

			},

			success :function(html) {

				console.log(html);
				var data = JSON.parse(html);

				if (data.status=='false') {

					$('.error').html(data.msg);

				} else {

					console.log('successfully login');

				}

				$('.login-loader').hide();
			}


		});

	});



	$('.create-cat').on('click',function(e){

		// e.preventDefault();

		var cat_name = $('.cat_name').val();
		var parent_id = $('.parent_cat').val();
		var cat_desc = $('.cat_desc').val();

		console.log(cat_name+" "+parent_id+" "+cat_desc);
		

		$.ajax({

			url : ajax_url+"admin/store_category",
			
			type: 'POST',
			
			data : {'category':'category',name:cat_name,parent_id:parent_id,description:cat_desc},
			
			beforeSend :  function(){
				$('.form-loader').show();
				$('.create-cat').attr('disabled','disabled');

			},

			success :function(html) {

				// console.log(html);
				$('.create-cat').removeAttr('disabled');
				$('.form-loader').hide();

				var data = JSON.parse(html);

				if (data.status=='false') {

					$('.cat_name').html(data.name);
					$('.parent_cat').html(data.parent);
					$('.cat_desc').html(data.desc);
					
				} else {

					window.location = '';

				}

				
			}


		});
	});



});