<?php
$Name = $POST['Name'];
$Mobile No = $POST['Mobile No'];
$Mother's Name = $POST['Mother's Name'];
$Father's Name = $POST['Father's Name'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('Connection Failed : '.$coon->Connect_error);
}else{
    $stmt = $conn->prepare("insert into admission(Name,Mobile No,Mother's Name,Father's Name)")
    $stmt->bind_param("siss",$Name,$Mobile No,$Mother's Name,$Father's Name);
    $stmt->execute();
    echo "Admmission Successful...";
    $stmt->close();
    $conn->close();
}
?>