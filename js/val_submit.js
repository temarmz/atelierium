/*------------------------------------------------- 
JAVASCRIPTS + AJAX
-------------------------------------------------*/

function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "../at/send_mail.php",
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
	
	if(!$("#name").val()) {
		$("#userName-info").html("");
		$("#name").css('border-color','red');
		valid = false;
	}
	if(!$("#email").val()) {
		$("#userEmail-info").html("");
		$("#email").css('border-color','red');
		valid = false;
	}
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("");
		$("#email").css('border-color','red');
		valid = false;
	}
	if(!$("#message").val()) {
        $("#content-info").html("");
        $("#message").css('border-color','red');
        valid = false;
    }
	
	return valid;
}