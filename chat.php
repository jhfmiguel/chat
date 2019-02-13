<?php
include "db.php";

$query = "SELECT * FROM tb_chat ORDER BY id DESC";
$execute = $connection->query($query);

while ($row = $execute->fetch_array()):
?>
				<div id="chat-data">
					<span style="color:#1c62c4;"><?php echo $row['name']; ?></span>
					<span style="color:#848484;"><?php echo $row['message']; ?></span>
					<span style="float:right;"><?php echo formatDate($row['date']); ?></span>
				</div>
<?php
endwhile;
?>