<?php

$server='localhost';
$username='root';
$password='';
$database='job';

$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("connection falied:".$conn->connect_error);
}
echo"";
if(isset($_POST["submit"])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_number'];
    $password=$_POST['password'];
    $sql="INSERT INTO `user`( `Name`, `Email`, `Password`,`phone_number`) VALUES ('".$name."','".$email."','".$password."',$number)";
    
    if(mysqli_query($conn,$sql)){
        echo "records inserted successfully.";
    }
    else{
       echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
    }
}



if(isset($_POST["Login"])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT*FROM user WHERE `Email`='$email' AND `Password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1)
    {
        header("location: index.php" );
    }else{
        $error="Incorrect email id or password.";
    }
}




if(isset($_POST["final"])){
    
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jobd=$_POST['job_desc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['CTC'];
    $sql="INSERT INTO `job`( `Company Name`, `Position`, `Job description`,`Skills` ,`CTC`) VALUES ('".$cname."','".$position."','".$jobd."','".$skills."','".$ctc."')";
    
    if(mysqli_query($conn,$sql)){
        echo "records inserted successfully.";
    }
    else{
       echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
    }
}

if(isset($_POST["connect"])){
    
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $sql="INSERT INTO `candidates`( `Name`, `Qualification`, `Apply `,`Year`) VALUES ('".$name."','".$qual."','".$apply."','".$year."')";
    if(mysqli_query($conn,$sql)){
        echo "records inserted successfully.";
    }
    else{
       echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
    }
}

?>