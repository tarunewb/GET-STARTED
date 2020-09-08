<?php
$name=$_POST["fname"];
if($name==""){
    echo "Error......First Name is Empty";
}
else{
    echo "$name<br>";
}
$Name=$_POST["lname"];
if (!empty($Name)){
echo "$Name<br>";
}
else{
echo "Error......Last Name is Empty";
exit;
}
$Email=$_POST["mail"];
if (!empty($Email)){
echo "$Email<br>";
}
else{
echo "Error......Email Adrress is empty";
exit;
}
$Password=$_POST["password"];
$cpass=$_POST["cPass"];
if ($Password==""){
echo "enter password<br>";
}
elseif ($Password!=$cpass){
echo "Error.... Password does not match<br>";
}
else{

$file = file_get_contents("../database/user.json");
$decode=json_decode($file,true);
$data=array(
"name"=>$name,
"last name"=>$Name,
"email"=>$Email,
"password"=>$Password,
);
 


$decode[]=$data;
$encod=json_encode($decode,true);
if(file_put_contents("../database/user.json",$encod)){
echo "Registration Successfull";
echo '<br>';

}

}