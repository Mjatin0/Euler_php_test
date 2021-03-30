<?php 
include 'admin/db.php';

if(isset($_POST['submit_contact'])){
$name = strip_tags($_POST['name']);
$mobile = strip_tags($_POST['mobile']);
$email = strip_tags($_POST['email']);
$enquiry = strip_tags($_POST['enquiry']);
$message = strip_tags($_POST['msg']);

 $ins_sql = "INSERT INTO `contact_users` (name ,mobile ,email ,enquiry ,message) VALUES('$name' ,'$mobile' ,'$email' ,'$enquiry' ,'$message')";

    $run_sql=mysqli_query($conn, $ins_sql) or die("Query Failed...");

    echo '<script>alert("We have Received Your details.We will contact you shortly")</script>';
    header("refresh:3;url=contact.html");
}else {
    echo '<script>alert("Please Check the details you have entered")</script>';
}
?>
