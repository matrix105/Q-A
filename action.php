<?php include './includes/template/head.php' ?>
<?php include './includes/template/navigation.php' ?>

<?php
require_once('./config/dbConfig.php');
require_once('./config/dbConnect.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
$quest1 = $_POST['quest1'];
$quest2 = $_POST['quest2'];
$quest3 = $_POST['quest3'];
$quest4 = $_POST['quest4'];
$quest5 = $_POST['quest5'];
$quest6 = $_POST['quest6'];
$quest7 = $_POST['quest7'];
$sql = "INSERT INTO `survey`(`users`,`quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `quest6`, `quest7`) VALUES (1,'$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7')" or die($db->connect_error);
$qr = $db->query($sql);


?>
<div class="container" style="padding:50px 50px;">
    <div class="row well alert alert-success">
        Form Submitted successfully!! 
        Thank you for your feedback!
    </div>
</div>