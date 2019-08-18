function showRegistrationForm() {
	$("#reg_error").hide();
	
	$.fancybox($('#reg_form'), {
		'closeBtn': true
	});

	$("#reg_form").submit(function() {
		if ($("#uid").val().length < 1 || $("#pass1").val().length < 1 || $("#pass2").val().length < 1 || 
			$("#email").val().length < 1 || $("#captcha_code").val().length < 1) {
				$("#reg_error").text("��������� ��� ����").show();
				return false;
		}

		$.fancybox.showLoading();

		$.ajax({
			type	 : "POST",
			cache	 : false,
			url		 : registrationUrl,
			data	 : $(this).serializeArray(),
			dataType : "json",
			success: function(data) {
				if (data.status == "0") {
					$.fancybox.close();
					location.href = data.url;
				} else if (data.status == "1") {
					$.fancybox.hideLoading();
					var message = data.message;
					console.log(message);
					$("#reg_error").html(message).show();
				} else {
					$.fancybox.hideLoading();
				}
			}
		});

		return false;
	});
}