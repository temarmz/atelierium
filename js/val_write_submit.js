/*------------------------------------------------- 
JAVASCRIPTS + AJAX
-------------------------------------------------*/

function sendWriteData(nameCourse) {
	var valid;	
	valid = validateContact();
	if(valid) {
		
		alert("Вы записались! Проверьте почту");
		jQuery.ajax({
		url: "../courses/write.php",
		data:'name='+$("#name").val()+'&email='+$("#email").val()+'&courseName='+$("#courseName").val()+'&phone='+$("#phone").val()+'&time='+$("#time").val(),
		type: "POST",
		success:function(data){
			$("#name").val('');
			$("#email").val('');
			$("#phone").val('');
			$("#courseName").val('');
			document.getElementById('courseName').value = nameCourse;
		},
		error:function (){}
		});

	}
}

function validateContact() {
	var valid = true;	
	
	// Имя
	if(!$("#name").val()) {
		$("#name").css('border-color','red');
		valid = false;
	}
	else {
		$("#name").css('border-color','#7F7F7F');
	}

	// Мыло
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

	//Телефон
	if(!$("#phone").val()) {
		$("#phone").css('border-color','red');
		valid = false;
	}
	else {
		$("#phone").css('border-color','#7F7F7F');
	}

	if(!$("#phone").val().match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/)) {
		$("#phone").css('border-color','red');
		valid = false;
	}
	
	return valid;
}