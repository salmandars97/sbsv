<?php
$date = date('Y-m-d');
require 'connect.php';
if(isset($_POST['submit'])){
$sql = "INSERT INTO subscription(subscription_id, subscription_email, date_added)
VALUES ('', '".$_POST['email']."', '".$date."')";

if ($conn->query($sql) === TRUE) { ?>
  <script type="text/javascript">
    alert('Newsletter subscription successful');
    window.history.back();
  </script>
  <?php
} else {
  ?>
    <script type="text/javascript">
      alert('Newsletter subscription failed. Try Again');
      window.history.back();
    </script>
    <?php
}

$conn->close();
}
else {
  ?>
    <script type="text/javascript">
        window.history.back();
    </script>
    <?php
}
?>
