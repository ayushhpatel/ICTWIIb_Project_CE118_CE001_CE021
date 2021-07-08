<?php
 include("connections.php");
 include("functions.php");
$sr_no=23;
$user_name="JEET";
        $query_select="SELECT * FROM profile where Username ='$user_name'";
       
        $result_select=mysqli_query($connect,$query_select);
        var_dump ($result_select);
        $rows=mysqli_num_rows($result_select);
        var_dump($rows);
         $myresult = mysqli_fetch_assoc($result_select);

        if($result_select)
        {
            var_dump($result_select);
        }
         

        // if($result_select && mysqli_num_rows($result_select)>0)
        // {
        //     $userdata=mysqli_fetch_assoc($result_select);
            
        //     echo $userdata;
        //     die;
        // }else
        // {
        //     echo "NULL";
        // }
?>