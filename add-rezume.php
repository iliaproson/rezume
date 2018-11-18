<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
    	<script type="text/javascript" src="js/jquery.cookie.min.js"></script>
    	<script type="text/javascript" src="js/jquery.form.js"></script>
    	<script type="text/javascript" src="js/TextChange.js"></script>
    	<script type="text/javascript" src="js/jquery.validate.js"></script>  
	
    	<script type="text/javascript">
			$(document).ready(function() {	
		        $('#form_reg').validate(
					{	
						// правила для проверки
						rules:{
							
							"reg_surname":{
								required:true,
	                            minlength:3,
	                            maxlength:15
							},
							"reg_name":{
								required:true,
	                            minlength:3,
	                            maxlength:15
							},
							
							"reg_email":{
							    required:true,
								email:true
							},
							"reg_phone":{
								required:true
							},
							"reg_file":{
								required:true
							},
						},

						// выводимые сообщения при нарушении соответствующих правил
						messages:{
							"reg_surname":{
								required:"Укажите вашу Фамилию!",
	                            minlength:"От 3 до 20 символов!",
	                            maxlength:"От 3 до 20 символов!"                            
							},
							"reg_name":{
								required:"Укажите ваше Имя!",
	                            minlength:"От 3 до 15 символов!",
	                            maxlength:"От 3 до 15 символов!"                               
							},
							"reg_email":{
							    required:"Укажите свой E-mail",
								email:"Не корректный E-mail"
							},
							"reg_phone":{
								required:"Укажите номер телефона!"
							},
							"reg_file":{
								required:"Необходимо указать файл!"
							},
						},
							
						submitHandler: function(form){
						$(form).ajaxSubmit({
							success: function(data) { 
										 
		        				if (data == 'true')
								{
									$("#block-form-registration").fadeOut(300,function() 
									{

									        
									    $("#reg_message").addClass("reg_message_good").fadeIn(400).html("Резюме успешно добавлено!");
									    $("#form_submit").hide();        
									});         
								}
								else
								{
								    $("#reg_message").addClass("reg_message_error").fadeIn(400).html(data); 
								}
							} 
						}); 
					}
				});
		    });     
		</script>

		<title>Добавить резюме</title>
	</head>
    <body>
    	<div id="block-content">

			<h2 class="h2-title">Добавить резюме</h2>
			<form method="post" id="form_reg" action="handler_reg.php">
				<p id="reg_message"></p>
				<div id="block-form-registration">
					<ul id="form-registration">

						<li>
						<label>Фамилия</label>
						<span class="star" >*</span>
						<input type="text" name="reg_surname" id="reg_surname" />
						</li>

						<li>
						<label>Имя</label>
						<span class="star" >*</span>
						<input type="text" name="reg_name" id="reg_name" />
						</li>

						<li>
						<label>E-mail</label>
						<span class="star" >*</span>
						<input type="text" name="reg_email" id="reg_email" />
						</li>

						<li>
						<label>Мобильный телефон</label>
						<span class="star" >*</span>
						<input type="text" name="reg_phone" id="reg_phone" />
						</li>

						<li>
						<label>Файл с резюме</label>
						<span class="star" >*</span> 
						<input type="file" name="file" id="add-file">
						</li>
					</ul>
				</div>
				<input type="submit" name="reg_submit" id="form_submit" value="Добавить резюме" />
			</form>
			</div>
    </body>
</html>