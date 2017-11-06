<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//include 'Login.html'; 
session_start();
$host='localhost';
$user='testuser';
$password='123456789';
$dbname='marks';
$_SESSION['pagenum']=0;

if (isset($_POST['id']) and isset($_POST['passw'])) {
    $ID = $_POST['id'];
    $pass = $_POST['passw'];
    if (empty($ID) || empty($pass)) {

        header('location:Login.php?no=true');
        exit;
    }



@ $db = mysqli_connect($host,$user ,$password,$dbname) or die("unable to connect to database");

 $query = "SELECT * FROM `students` WHERE  `Id`='$ID' OR `Pass`='$pass'";
        $result = $dbname->query($query);
        if (!$result) {
            echo "<script language='JavaScript'>alert('FAILED'); </script>";
        }

         foreach ($result as $item) {
             if ($ID == $item['Id'] and $pass == $item['Pass']) {
                
                     window.location.href='myCourses.html';
                    
        

$dbname->close();
?>
</body>
</html>


