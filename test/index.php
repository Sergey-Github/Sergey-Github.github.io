<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"></script>
</head>
<body>
	
	<!-- Форма 1 -->
	<form id="id_1" name="form_1">
		<input type="text" name="name" value="value_name">
	</form>

	<!-- Форма 2 -->
	<form id="id_2" name="form_2">
		<textarea name="textarea">value_textarea</textarea>
	</form>

	<input type="button" name="button" value="Send" onclick="send()">
	<script type="text/javascript">
	
	
	function form_send_1(next){
		let result_string = '';
		const data = new FormData(document.forms.form_1);
		data.forEach(function(value, key){
			result_string += value + '=' + key + '&';
		});

		let request = new XMLHttpRequest();
		request.open("POST", "/processing.php", true);

		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		request.send(result_string);


		// console.log("Before 1 next");
		next();
		// console.log("After 1 next");

	}

	function form_send_2(next){
		let result_string = '';
		const data = new FormData(document.forms.form_2);
		data.forEach(function(value, key){
			result_string += value + '=' + key + '&';
		});

		let request = new XMLHttpRequest();
		request.open("POST", "/processing.php", true);

		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		request.send(result_string);

		// console.log("Before 2 next");
		next();
		// console.log("After 2 next");

	}

	function send() {
	
		form_send_1(function() {
			form_send_2(function (){
				// setTimeout(function () {
					// setTimeout
					window.location.href = "/somepage.php";
				// }, 500);
			});
		});

	}
	</script>
</body>
</html>