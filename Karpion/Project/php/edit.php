

<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="contentbox" >
<script type="text/javascript">
function countdown() {
 var i = document.getElementById('timecount');
 if (parseInt(i.innerHTML)<=1) {
  location.href = 'login.php';
 }
 i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<?php
$id=$loggedin_id;
$sql="UPDATE CONTRACTOR SET Name='" . $_POST['Name'] . "', Contact='" . $_POST['Contact'] . "', Header='" . $_POST['Header'] . "', UserName='" . $_POST['UserName'] . "' ,Password='" . $_POST['Password'] . "'  WHERE User_ID='$id'";
$result=mysqli_query($con,$sql);
if($result){
 echo " <div align='center'>";
 echo "Account Updated Sucessfully.";
 echo " <a href='login.php' >Click here</a> to go back. ";
 echo "</div> ";
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
 header("Location: login.php");
} else {
 echo "Unable to update Your Account";
}
?>
</div>
</body>
</html>
</div>