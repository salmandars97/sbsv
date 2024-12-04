<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "osama";

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
	if(isset($_FILES["resume"]["name"]) && isset($_GET['method']))
	{
		$test = explode('.', $_FILES["resume"]["name"]);
		$filename = basename(generateRandomString() .".". strtolower(pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION)));
		$target_dir = "assets/admin/images/file/";
		$target_file = $target_dir . $filename;
		if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {		
			// Create connection
			$conn1 = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn1->connect_error) {
				die("Connection failed: " . $conn1->connect_error);
			}
			if($_GET['method'] == "insert"){
				$sql = "INSERT INTO au_assessment(id, destination, name, email, phone_no, occupation, date_added, datafile, e_id,que,idx)
				VALUES ('','Australia', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['occupation']."', CURRENT_DATE, '".$filename."', '0', '".$_POST['type']."', '".$_POST['max_id']."')";

				if ($conn1->query($sql) === TRUE) {
					//echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn1->error;
				}

				$conn1->close();
			}
			else if($_GET['method'] == "update"){
				$sql = "UPDATE au_assessment
				SET name='".$_POST['name']."', email='".$_POST['email']."', phone_no='".$_POST['phone']."',
				occupation='".$_POST['occupation']."', datafile='".$filename."', que='".$_POST['type']."'
				WHERE idx='".$_POST['max_id']."'";

				if ($conn1->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn1->close();
			}
		}
		else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	else if(isset($_GET['method']))
	{
		// Create connection
		$conn1 = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn1->connect_error) {
			die("Connection failed: " . $conn1->connect_error);
		}
		if($_GET['method'] == "insert"){
			$sql = "INSERT INTO au_assessment(id, destination, name, email, phone_no, occupation, date_added, e_id,que,idx)
			VALUES ('','Australia', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['occupation']."', CURRENT_DATE, '0', '".$_POST['type']."', '".$_POST['max_id']."')";

			if ($conn1->query($sql) === TRUE) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn1->error;
			}

			$conn1->close();
		}
		else if($_GET['method'] == "update"){
			$sql = "UPDATE au_assessment
			SET name='".$_POST['name']."', email='".$_POST['email']."', phone_no='".$_POST['phone']."',
			occupation='".$_POST['occupation']."', que='".$_POST['type']."'
			WHERE idx='".$_POST['max_id']."'";

			if ($conn1->query($sql) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $conn->error;
			}

			$conn1->close();
		}
	}
?>
