<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>
	<body>
		<center>
			<form action="index.php" method="post">
				<table>
					<tr>
						<th colspan="2"><h1>INDIAN CRICKET TEAM</h1></th>
					</tr>
					<tr>
						
						<th><label for="">Enter Nmanes of Players: </label>&nbsp;</th>
						<th>
							<textarea name="plist" id="plist" rows="3" cols="20" required></textarea>
						</th>
						<br /><br />
					<tr>
						<th colspan="2"><button type="submit" value="ENROLL">ENROLL</button></th>
					</tr>
					</tr>
				</table>
			</form>
		</center>
		<?php
		$listsep = "/[\s,.% ]+/";
		if(isset($_POST["plist"])){
			$plist = $_POST["plist"];
			$plist = preg_split($listsep,$plist);
			$plist = array_values($plist);
			echo "<table><th>Players List: </th>";
			// print_r($plist);
			// echo "Asending order: ";
			// arsort($split_arr);
			// echo "Asending order: ";
			// asort($split_arr);
			foreach($plist as $player)
				{	
					echo "<tr>";
					echo "<td>{$player}</td>";
					echo "</tr>";
				}
		
		}
		?>
	</body>
</html>
