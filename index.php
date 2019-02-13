<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}

		setInterval(function(){ajax();}, 1000);
	</script>

</head>
<body onload="ajax();">
	<div id="content">
		<div id="chat-box">
			<div id="chat">

			</div>
		</div>
		<form method="POST" action="index.php">
			<input type="text" name="name" placeholder="Name">
			<textarea name="message" placeholder="Message"></textarea>
			<input type="submit" name="send" value="Send">
		</form>
<?php
if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$query = "INSERT INTO tb_chat (name, message) VALUES ('$name', '$message')";
	$execute = $connection->query($query);
	if ($execute) {
		echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
	}
}
?>
	</div>
</body>
</html>