<?php

$con = mysqli_connect("localhost", "root", "", "osama");

if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");



$query = "SELECT f.c_id,f.uploaded_on as date,(select c.user_name from crm c WHERE c.id = f.c_id) as name FROM files f WHERE DATE(uploaded_on) = CURDATE() OR DATE(uploaded_on) = CURDATE()  - 1 OR DATE(uploaded_on) = CURDATE()  - 2 AND f.nstatus = 0 ORDER BY id DESC LIMIT 30";
$result = mysqli_query($con, $query);
$output = '';

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<li><p></p><a href="http://sbsv.test/Crmauth/display_clients?id=' . $row['c_id'] .'"><strong style="color: #000;font-family: inherit;">'.$row["name"].'</strong><br /><p style="color: #000;font-family: inherit;"><em>uploaded new document.</em></p><small><em style="color: #000;font-family: inherit;">'.$row["date"].'</em></small></a></li><hr style="margin: 0;">';
	}
	
	$status_query = "SELECT sum(status) FROM files WHERE nstatus=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);

$update_query = "UPDATE files SET nstatus = 1 WHERE nstatus=0";
mysqli_query($con, $update_query);


echo json_encode($data);
}

else{
    //$output .= '<li><a href="#" class="text-bold text-italic">No Not Found</a></li>';
}


}
?>
