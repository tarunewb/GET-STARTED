<?php
$name = $_POST["nam"];
if (!empty($name)) {
    echo "$name<br>";
} else {
    echo "Error...First name is not Enter<br>";
    exit;
}
 
$lnam = $_POST["lname"];
if (!empty($lnam)) {
    echo "$lnam<br>";
} else {

    echo "Error... last Name is not enter<br>";
    exit;
}
 
$email=$_POST["mail"];
if($email==""){
  echo "Error.....enter the email address<br>";
  exit;
}else{
  echo "$email<br>";

}
 
 $password=$_POST["pwd"];
 $cpassword=$_POST["cpwd"];
 If($password==""){
   echo "Field Can't be empty<br>";
 }else if($password!=$cpassword){
   echo "Password don't match<br>";
 } else{ 
   echo "registration Successful";
 }
//  $password = $_POST["pwd"];
//  if ($password == "") {
//      echo "Enter the password<br>";
//  } else {
//      echo "$password<br>";
//  }
//  exit;
 
//  $cpass=$_POST["cpwd"];
//  if ($password != $cpass) {
//    echo("Error... Passwords do not match");
//    exit;
//    } 
?>