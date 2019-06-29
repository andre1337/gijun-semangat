<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'sjm');

	$sql = $conn->prepare("SELECT * FROM tbl_keluhan WHERE keluhan LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["keluhan"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

