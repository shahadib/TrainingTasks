<?php 
$db_host = 'localhost';
$db_name = 'robot';
$db_user = 'root';
$db_pass = '';


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


if($mysqli->connect_error){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
if (isset($_POST['Left'])){
echo  '<p id="result">L</p>';
mysqli_query($mysqli,"INSERT INTO`control` SET `left-side` = 'L'");
}
if (isset($_POST['Right'])){
echo  '<p id="result">R</p>';
mysqli_query($mysqli,"INSERT INTO`control` SET `right-side` = 'R'");
}
if (isset($_POST['Backwards'])){
echo '<p id="result">B</p>';
mysqli_query($mysqli,"INSERT INTO`control` SET `backward` = 'B'");
}
if (isset($_POST['Forwards'])){
echo  '<p id="result">F</p>';
mysqli_query($mysqli,"INSERT INTO`control` SET `forward` = 'F'");
}
if (isset($_POST['STOP'])){
echo  '<p id="result">S</p>';
mysqli_query($mysqli,"INSERT INTO`control` SET `stop-side` = 'S'");
}
?>
<html>
<head><title>ROBOT CONTROL PANEL</title></head>
<style>
body {
background-color: #6da9b4;;
}
#button-back{
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin-left:22px;
  cursor: pointer;
background-color: white; 
color: black; 
border: 2px solid #008CBA;
}       
#button-back:hover {
background-color: #008CBA;
color: white;}
#back{text-align:left;}
#result{text-align:center;color:white;font-size:300%;}
</style>
<body>
<form>
<p id="back">
<input type="button" value="Back" id="button-back" onclick="history.back()">
</p>
</form>
</body>
</html>
