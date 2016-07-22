
$(document).ready(function() {
	$("#reg_submit").click(function() {
		var process = true;
		$("#registration input").each(function() {
			if ($.trim(this.value) == "") {
				process = false;
			}
		});
		if (process == true) {
			// Check to see if username is more than 4 characters
			var firstname = $.trim($("#firstname").val());
			var lastname = $.trim($("#lastname").val());
			var username = $.trim($("#username").val());
			var password = $.trim($("#password").val());
			
			if (username.length >= 4) {
				
					// Check to see if username is taken
					$("#reg_span").html("<img src='images/loading.gif' height='20' align='absmiddle' />");
					$.post("scripts/parse_registration.php", { action: "check", username: username }, function(check_data) {
						if (check_data == 0) {
							// Everything is fine to use
							$("#registration input, #registration button").each(function() {
								$("#"+this.id).attr("disabled", "disabled");
							});
							$.post("scripts/do_parse_registration.php", { action: "register", firstname: firstname, lastname: lastname, username: username, password: password }, function(reg_data) {
								if (reg_data == 1) {
									// Successfully registered
									$("#reg_span").empty();
									$("#reg_success").fadeIn(500);
								} else if (reg_data == 0) {
									// Registration failed.
									$("#reg_span").empty();
									$("#reg_failed").fadeIn(500);
								}
							});
						} else if (check_data == 1) {
							// Username already exists
							$("#reg_span").html("<font color='#ff0000' size='-1'>Username is taken.</font>");
						} else {
							// Debugging
							alert(check_data);
						}
					});
				
			} else {
				$("#reg_span").html("<font color='#ff0000' size='-1'>Username is too short.</font>");
			}
		} else {
			$("#reg_span").html("<font color='#ff0000' size='-1'>All fields required.</font>");
		}
	});
});