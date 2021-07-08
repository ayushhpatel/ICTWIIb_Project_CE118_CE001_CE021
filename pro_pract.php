
<?php
if(isset($_POST['submit'])){
include("functions.php");
 include("connections.php"); 
 $SrNo="1";
    $Mobile_Number="9033958003";
     $Profile_for="self";
    $Gender="Male";
    $Height="5";
    $Marital_Status="Never married";
    $Mother_tongue="Gujrati";
    $Religion="Hindu";
    $Country="India";
    $dob ="21-09-2000";
    $Age ="21";
    $emailquery="INSERT INTO `userinfo`(`SrNo`, `Mobile_No`, `ProfileFor`, `Gender`, `Height`, `Marital_Status`, `Mother_tounge`, `Religion`, `Country`, `dob`, `Age`) VALUES ($SrNo,$Mobile_Number,$Profile_for,$Gender,$Height,$Marital_Status,$Mother_tongue,$Religion,$Country,$dob,$Age);";
    $query=mysqli_query($connect,$emailquery);
    
    // $emailcount=mysqli_num_rows($query);
if($query){
    echo "yes";
    // $userdata=mysqli_fetch_array($query);
        // $eusername=$userdata['Age'];
        // echo $eusername;
}else{
    echo "No";
       
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="submit">Save</button></form>
</body>
</html>