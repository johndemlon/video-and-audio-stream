<html>
<body>
<form method="post">
<div>search<br><input name="a"></div><br>
<div><button name="b">submit</button></div><br>
</form>
<?php
if(isset($_POST["b"])){
$servername = "sql103.unaux.com";
$username = "unaux_25915225";
$password = "xc0rai";
$dbname = "unaux_25915225_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){die("Connection failed: " . $conn->connect_error);}else{
$param = "%{$_POST['a']}%";
$stmt = $conn->prepare("select * from b where a like ?");
$stmt->bind_param("s", $param);
$stmt->execute();
$stmt->bind_result($id,$a);
while ($stmt->fetch()) {
  echo "{$a}<br>";
}
}}
?>
</body>
</html>