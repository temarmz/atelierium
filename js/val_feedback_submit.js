/*------------------------------------------------- 
JAVASCRIPTS + AJAX
-------------------------------------------------*/

function sendFeedbackData() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "send_mail.php",
		data:'userName='+$("#name").val()+'&userEmail='+$("#email").val()+'&content='+$("#message").val(),
		type: "POST",
		success:function(data){
			$("#mail-status").html(data);
			$("#name").val('');
			$("#email").val('');
			$("#message").val('');
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	//Имя
	if(!$("#name").val()) {
		$("#name").css('border-color','red');
		valid = false;
	}
	else {
		$("#name").css('border-color','#7F7F7F');
	}
	
	//Мыло
	if(!$("#email").val()) {
		$("#email").css('border-color','red');
		valid = false;
	}
	else {
		$("#email").css('border-color','#7F7F7F');
	}
	
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email").css('border-color','red');
		valid = false;
	}
	
	//Сообщение
	if(!$("#message").val()) {
        $("#message").css('border-color','red');
        valid = false;
    }
    else {
		$("#message").css('border-color','#7F7F7F');
	}
	
	document.getElementById('success-message').value = nameCourse;
	
	return valid;
}