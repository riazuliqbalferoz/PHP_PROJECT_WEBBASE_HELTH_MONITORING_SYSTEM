<?php
	//sleep(3);
    require_once('sql.php');
	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'health_monitoring');
	$sql = "select * from apporved_appointment where umail like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
					   <td> Doctor Mail</td>
						<td> user Mail</td>
					
						<td> Date</td>
						<td> Time</td>
				
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							
							<td>{$row['umail']}</td>
							<td>{$row['dmail']}</td>
							<td>{$row['date']}</td>
							<td>{$row['time']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>