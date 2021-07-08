<?php



function check_login($connect)
{
    if(isset($_SESSION['Sr.No']))
    {
        $sr_no=$_SESSION['Sr.No'];

        $query_select="SELECT * FROM `profile` WHERE `Sr.No` = '$sr_no'";
       
        $result_select=mysqli_query($connect,$query_select);

        $rows=mysqli_num_rows($result_select);
        

        if($rows && $result_select)
        {
            $user_data =mysqli_fetch_assoc($result_select);
            return $user_data;
            die;
        }

        echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Please Login or Signup to visit Website');
                            window.location.href='Login_page.php';
                            </script>");
        
    }
    
}
function check_username($connect,$username)
{
        
        $myquery="SELECT * FROM `profile` WHERE Username='$username'";
        $myresult=mysqli_query($connect,$myquery);

        if(mysqli_num_rows($myresult)>0)
        {
            
            return TRUE;
        }
        else{
                return FALSE;
        }
}
// -----------------------------Age Calculator------------------------------
function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}

// -------------------------Phone Number Validate-----------------------
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/',$mobile);
}

?>