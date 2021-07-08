<?php
 session_start();
 include("functions.php");
 include("connections.php"); 
 if(isset($_SESSION['Sr.No']))
 {
    $_SESSION;
     $user_data=check_login($connect); 
 }


if(isset($_POST['submit']))
{
    $username=$user_data['Username'];
    $SrNo=$user_data['Sr.No'];
    $Mobile_Number=$_POST['MobileNumber'];
    $Profile_for=$_POST['profile'];
    $Gender=$_POST['gender'];
    $Marital_Status=$_POST['MaritalStatus'];
    $Mother_tongue=$_POST['mtongue'];
    $Religion=$_POST['religion'];
    $Country=$_POST['countryofresidence'];
    $dob = $_POST['DOB'];
    $Age = ageCalculator($dob);//By using function here
    $Education=$_POST['EducationQualification'];
    $Work=$_POST['work'];
    $YearlyIncome=$_POST['YearlyIncome'];
    $About=$_POST['About'];
    $photo=$_FILES['photo'];
    $filename=$photo['name'];
    $filepath=$photo['tmp_name'];
    $filerror=$photo['error'];

    if($filerror==0){
        $desfile="photos/".$filename;
        $result=move_uploaded_file($filepath,$desfile);
    }

    if($Gender=="male"){
        if($Age<21){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Sorry Your age is below 21');
            window.location.href='myprofile.php';
            </script>");
           die;
        }
    }
    if($Gender=="female"){
        if($Age<18){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Sorry Your age is below 18');
            window.location.href='myprofile.php';
            </script>");
           die;
        }
    }
    if(!validate_mobile($Mobile_Number)){
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please Enter a Valid Mobile Number');
            window.location.href = 'myprofile.php';
        </script>");
               die;
    }

$sql="INSERT INTO userinfo (SrNo,Username,MobileNo,ProfileFor,Gender,MaritalStatus,MotherTongue,Religion,Country,dob,Age,Education,workas,Income,about,photo) values ('$SrNo','$username','$Mobile_Number','$Profile_for','$Gender','$Marital_Status','$Mother_tongue','$Religion','$Country','$dob','$Age','$Education','$Work','$YearlyIncome','$About','$desfile')";
$insert_query=mysqli_query($connect,$sql);
if($insert_query)
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Profile Saved Successfully...');
    window.location.href = 'homepage.php';
</script>");

}else{
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Oops..!');
        window.location.href = 'myprofile.php';
    </script>");
}
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mycss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body{
            background: url('https://images.unsplash.com/photo-1587271407850-8d438ca9fdf2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
  height: 100vh;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items:center;
  justify-content: space-around;
  font-family: 'Montserrat',sans-serif;
        }
        label{
            font-size: 20px;
        }
    
    </style>
    <title>My Profile</title>
</head>

<body>


    <div class="bg-img">
<div class="content">
    <header>Details</header>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        Mobile Number: <input type="text" name="MobileNumber" required><br><br>
        <label for="Person For">Person For:</label>
        <select name="profile" required>
            <option value="">-----Select Here-----</option>
            <option value="Self">Self</option>
            <option value="MyChild">My Child</option>
            <option value="Friend">Friend</option>
            <option value="Relavtive">Relavtive</option>
        </select><br><br>
        <Label>Gender:</Label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label>
        <br><br>
        Date Of Birth:<input type="date" name="DOB" max="2003-07-02"><br><br>
        <input type="file" name="photo">
        <br><br>
        Height: <select name="Height">
            <option value="" selected="selected">Please Select</option>
            <option value="4' 0">4' 0" (1.22 mts)</option>
            <option value="4' 1">4' 1" (1.24 mts)</option>
            <option value="4' 2">4' 2" (1.28 mts)</option>
            <option value="4' 3">4' 3" (1.31 mts)</option>
            <option value="4' 4">4' 4" (1.34 mts)</option>
            <option value="4' 5">4' 5" (1.35 mts)</option>
            <option value="4' 6">4' 6" (1.37 mts)</option>
            <option value="4' 7">4' 7" (1.40 mts)</option>
            <option value="4' 8">4' 8" (1.42 mts)</option>
            <option value="4' 9">4' 9" (1.45 mts)</option>
            <option value="4' 10">4' 10" (1.47 mts)</option>
            <option value="4' 11">4' 11" (1.50 mts)</option>
            <optgroup label="&nbsp;"></optgroup>
            <option value="5' 0">5' 0" (1.52 mts)</option>
            <option value="5' 1">5' 1" (1.55 mts)</option>
            <option value="5' 2">5' 2" (1.58 mts)</option>
            <option value="5' 3">5' 3" (1.60 mts)</option>
            <option value="5' 4">5' 4" (1.63 mts)</option>
            <option value="5' 5">5' 5" (1.65 mts)</option>
            <option value="5' 6">5' 6" (1.68 mts)</option>
            <option value="5' 7">5' 7" (1.70 mts)</option>
            <option value="5' 8">5' 8" (1.73 mts)</option>
            <option value="5' 9">5' 9" (1.75 mts)</option>
            <option value="5' 10">5' 10" (1.78 mts)</option>
            <option value="5' 11">5' 11" (1.80 mts)</option>
            <optgroup label="&nbsp;&nbsp;"></optgroup>
            <option value="6' 0">6' 0" (1.83 mts)</option>
            <option value="6' 1">6' 1" (1.85 mts)</option>
            <option value="6' 2">6' 2" (1.88 mts)</option>
            <option value="6' 3">6' 3" (1.91 mts)</option>
            <option value="6' 4">6' 4" (1.93 mts)</option>
            <option value="6' 5">6' 5" (1.96 mts)</option>
            <option value="6' 6">6' 6" (1.98 mts)</option>
            <option value="6' 7">6' 7" (2.01 mts)</option>
            <option value="6' 8">6' 8" (2.03 mts)</option>
            <option value="6' 9">6' 9" (2.06 mts)</option>
            <option value="6' 10">6' 10" (2.08 mts)</option>
            <option value="6' 11">6' 11" (2.11 mts)</option>
            <optgroup label="&nbsp;&nbsp;&nbsp;"></optgroup>
            <option value="7'+">7' (2.13 mts) plus</option>
        </select><br><br>
        <label for="mstatus">Marital Status : </label><select name="MaritalStatus">
            <option value="" selected="selected">Please Select</option>
            <option value="Never Married">Never Married</option>
            <option value="Married">Married</option>
            <option value="Awaiting Divorce">Awaiting Divorce</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
            <option value="Annulled">Annulled</option>
        </select><br><br>
        <label for="mtongue">Mother Tongue: <select name="mtongue">
                <option value="" selected="selected">Please Select</option>
                <optgroup label="&nbsp;"></optgroup>
                <optgroup label="North India">
                    <option value="Hindi">Hindi</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Bihari/Maithili">Bihari/Maithili</option>
                    <option value="Rajasthani/Jaipuri">Rajasthani/Jaipuri</option>
                    <option value="Haryanvi">Haryanvi</option>
                    <option value="Himachali/Pahari">Himachali/Pahari</option>
                    <option value="Kashmiri">Kashmiri</option>
                    <option value="Sindhi">Sindhi</option>
                    <option value="Urdu">Urdu</option>
                </optgroup>
                <optgroup label="&nbsp;&nbsp;"></optgroup>
                <optgroup label="West">
                    <option value="Marathi">Marathi</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Kutchi">Kutchi</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Konkani">Konkani</option>
                    <option value="Sindhi">Sindhi</option>
                </optgroup>
                <optgroup label="&nbsp;&nbsp;&nbsp;"></optgroup>
                <optgroup label="South">
                    <option value="Tamil<">Tamil</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Kannada">Kannada</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Tulu">Tulu</option>
                <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;"></optgroup>
                <optgroup label="East">
                    <option value="Bengali">Bengali</option>
                    <option value="Oriya">Oriya</option>
                    <option value="Assamese">Assamese</option>
                    <option value="Sikkim/ Nepali">Sikkim/ Nepali</option>
                </optgroup>
                <optgroup label="---------">
                    <option value="English">English</option>
                </optgroup>
            </select><br><br>
            <label for="religion">Religion : </label><select name="religion">
                <option value="" selected="selected">Select a Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="Buddhist">Buddhist</option>
                <option value="Jain">Jain</option>
                <option value="Parsi">Parsi</option>
                <option value="Jewish">Jewish</option>
                <option value="Bahai">Bahai</option>
            </select><br><br>Country: <select name="countryofresidence" tabindex="12">
                <optgroup label="Frequently Used">
                    <option value="India" label="India">India</option>
                    <option value="USA" label="USA">USA</option>
                    <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
                    <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                    <option value="Canada" label="Canada">Canada</option>
                    <option value="Australia" label="Australia">Australia</option>
                    <option value="New Zealand" label="New Zealand">New Zealand</option>
                    <option value="Pakistan" label="Pakistan">Pakistan</option>
                    <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                    <option value="Kuwait" label="Kuwait">Kuwait</option>
                    <option value="South Africa" label="South Africa">South Africa</option>
                </optgroup>
                <optgroup id="countryofresidence-optgroup-More" label="More">
                    <option value="Afghanistan" label="Afghanistan">Afghanistan</option>
                    <option value="Australia" label="Australia">Australia</option>
                    <option value="Austria" label="Austria">Austria</option>
                    <option value="Bahrain" label="Bahrain">Bahrain</option>
                    <option value="Bangladesh" label="Bangladesh">Bangladesh</option>
                    <option value="Belgium" label="Belgium">Belgium</option>
                    <option value="Botswana" label="Botswana">Botswana</option>
                    <option value="Brunei" label="Brunei">Brunei</option>
                    <option value="Canada" label="Canada">Canada</option>
                    <option value="Chile" label="Chile">Chile</option>
                    <option value="China" label="China">China</option>
                    <option value="Cyprus" label="Cyprus">Cyprus</option>
                    <option value="Denmark" label="Denmark">Denmark</option>
                    <option value="Dominican Republic" label="Dominican Republic">Dominican Republic</option>
                    <option value="Fiji Islands" label="Fiji Islands">Fiji Islands</option>
                    <option value="Finland" label="Finland">Finland</option>
                    <option value="France" label="France">France</option>
                    <option value="Germany" label="Germany">Germany</option>
                    <option value="Greece" label="Greece">Greece</option>
                    <option value="Guyana" label="Guyana">Guyana</option>
                    <option value="Hong Kong SAR" label="Hong Kong SAR">Hong Kong SAR</option>
                    <option value="Hungary" label="Hungary">Hungary</option>
                    <option value="India" label="India" selected="selected">India</option>
                    <option value="Indonesia" label="Indonesia">Indonesia</option>
                    <option value="Iran" label="Iran">Iran</option>
                    <option value="Ireland" label="Ireland">Ireland</option>
                    <option value="Israel" label="Israel">Israel</option>
                    <option value="Italy" label="Italy">Italy</option>
                    <option value="Jamaica" label="Jamaica">Jamaica</option>
                    <option value="Japan" label="Japan">Japan</option>
                    <option value="Kenya" label="Kenya">Kenya</option>
                    <option value="Kuwait" label="Kuwait">Kuwait</option>
                    <option value="Malaysia" label="Malaysia">Malaysia</option>
                    <option value="Maldives" label="Maldives">Maldives</option>
                    <option value="Mauritius" label="Mauritius">Mauritius</option>
                    <option value="Mexico" label="Mexico">Mexico</option>
                    <option value="Nepal" label="Nepal">Nepal</option>
                    <option value="Netherlands" label="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles" label="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Zealand" label="New Zealand">New Zealand</option>
                    <option value="Norway" label="Norway">Norway</option>
                    <option value="Oman" label="Oman">Oman</option>
                    <option value="Pakistan" label="Pakistan">Pakistan</option>
                    <option value="Philippines" label="Philippines">Philippines</option>
                    <option value="Poland" label="Poland">Poland</option>
                    <option value="Qatar" label="Qatar">Qatar</option>
                    <option value="Russia" label="Russia">Russia</option>
                    <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                    <option value="Singapore" label="Singapore">Singapore</option>
                    <option value="South Africa" label="South Africa">South Africa</option>
                    <option value="Spain" label="Spain">Spain</option>
                    <option value="Sri Lanka" label="Sri Lanka">Sri Lanka</option>
                    <option value="Sweden" label="Sweden">Sweden</option>
                    <option value="Switzerland" label="Switzerland">Switzerland</option>
                    <option value="Tanzania" label="Tanzania">Tanzania</option>
                    <option value="Thailand" label="Thailand">Thailand</option>
                    <option value="Trinidad and Tobago" label="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="USA" label="USA">USA</option>
                    <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
            </select>
            <br><br>
            <label for="mtongue">Highest Education Qualification: <select name="EducationQualification" required>
                    <option value="" selected="selected">Please Select</option>
                    <optgroup label="&nbsp;"></optgroup>
                    <optgroup label="Engineering">
                        <option value="BE/B-TECH<">BE/B-TECH</option>
                        <option value="ME/M.TECH">ME/MTECH</option>
                        <option value="MsEng">M.S Engineering</option>
                        <option value="EngDiploma">Enginnering Diploma</option>
                        <option value="AE">AE</option>
                        <option value="AET">AET</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="COMMERCE/FINANCE">
                        <option value="Bcom">B.Com</option>
                        <option value="CA">CA</option>
                        <option value="CFA">CFA</option>
                        <option value="Mcom">M.Com</option>
                        <option value="PDG">PGD FINANCE</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Medical">
                        <option value="MBBS">MBBS</option>
                        <option value="BAMS">BAMS</option>
                        <option value="BHMS">BHMS</option>
                        <option value="BDS">BDS</option>
                        <option value="MS">MS</option>
                        <option value="MD">MD</option>
                        <option value="Bpharm">B.Pharm</option>
                        <option value="Mpharm">M.Pharm</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Arts">
                        <option value="BA">BA</option>
                        <option value="B.Ed">B.Ed</option>
                        <option value="BFA">BFA</option>
                        <option value="MA">MA</option>
                        <option value="BSW">BSW</option>
                        <option value="MSW">MSW</option>
                        <option value="M.Ed">M.Ed</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="LAW">
                        <option value="LLB">LLB</option>
                        <option value="LLM">LLM</option>
                        <option value="ALA">ALA</option>
                        <option value="LLB Hons">LLB Hons.</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Other">
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Honors">Honours</option>
                        <option value="Associate">Associate</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Non Graduate">
                        <option value="High School">High School</option>
                        <option value="Less than High School">Less than High School</option>
                    </optgroup>
                </select>
                <br><br>
                <label for="Work As">You Work as :</label>
                <select name="work" required>
                    <option value="" selected="selected">-----Select Here-----</option>
                    <option value="Private Company">Private Company</option>
                    <option value="Government Sector">Government Sector</option>
                    <option value="Defence Service">Defence Service</option>
                    <option value="Bussiness/Self Employeed">Bussiness/Self Employeed</option>
                    <option value="Not Working">Not Working</option>
                </select><br><br>
                <label for="YearlyIncome">Yearly Income :</label>
                <select name="YearlyIncome" required>
                    <option value="" selected="selected">-----Select Here-----</option>
                    <option value="Upto 1 lakh">Upto 1 lakh</option>
                    <option value="1 to 2 Lakh">1 to 2 Lakh</option>
                    <option value="2 to 4 Lakh">2 to 4 Lakh</option>
                    <option value="4 to 10 Lakh">4 to 10 Lakh</option>
                    <option value="10 to 30 Lakh">10 to 30 Lakh</option>
                    <option value="50 Lakh to 1 Crore">50 Lakh to 1 Crore</option>
                    <option value="Above 1 Crore">Above 1 Crore</option>
                </select><br><br>
                <label for="About">Tell us About Yourself :</label>
            <textarea name="About" cols="30" rows="5" style="resize: none;"></textarea>
            <br><br>
            <div class="field space">
                  <input type="submit" name="submit">SAVE</button>
              </div>
    </form></div>
    </div>
      





    <!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        Mobile Number: <input type="text" name="MobileNumber" required><br><br>
        <label for="Person For">Person For:</label>
        <select name="profile" required>
            <option value="">-----Select Here-----</option>
            <option value="Self">Self</option>
            <option value="MyChild">My Child</option>
            <option value="Friend">Friend</option>
            <option value="Relavtive">Relavtive</option>
        </select><br><br>
        <Label>Gender:</Label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label>
        <br><br>
        Date Of Birth:<input type="date" name="DOB" max="2003-07-02"><br><br>
        <input type="file" name="photo">
        <br><br>
        Height: <select name="Height">
            <option value="" selected="selected">Please Select</option>
            <option value="4' 0">4' 0" (1.22 mts)</option>
            <option value="4' 1">4' 1" (1.24 mts)</option>
            <option value="4' 2">4' 2" (1.28 mts)</option>
            <option value="4' 3">4' 3" (1.31 mts)</option>
            <option value="4' 4">4' 4" (1.34 mts)</option>
            <option value="4' 5">4' 5" (1.35 mts)</option>
            <option value="4' 6">4' 6" (1.37 mts)</option>
            <option value="4' 7">4' 7" (1.40 mts)</option>
            <option value="4' 8">4' 8" (1.42 mts)</option>
            <option value="4' 9">4' 9" (1.45 mts)</option>
            <option value="4' 10">4' 10" (1.47 mts)</option>
            <option value="4' 11">4' 11" (1.50 mts)</option>
            <optgroup label="&nbsp;"></optgroup>
            <option value="5' 0">5' 0" (1.52 mts)</option>
            <option value="5' 1">5' 1" (1.55 mts)</option>
            <option value="5' 2">5' 2" (1.58 mts)</option>
            <option value="5' 3">5' 3" (1.60 mts)</option>
            <option value="5' 4">5' 4" (1.63 mts)</option>
            <option value="5' 5">5' 5" (1.65 mts)</option>
            <option value="5' 6">5' 6" (1.68 mts)</option>
            <option value="5' 7">5' 7" (1.70 mts)</option>
            <option value="5' 8">5' 8" (1.73 mts)</option>
            <option value="5' 9">5' 9" (1.75 mts)</option>
            <option value="5' 10">5' 10" (1.78 mts)</option>
            <option value="5' 11">5' 11" (1.80 mts)</option>
            <optgroup label="&nbsp;&nbsp;"></optgroup>
            <option value="6' 0">6' 0" (1.83 mts)</option>
            <option value="6' 1">6' 1" (1.85 mts)</option>
            <option value="6' 2">6' 2" (1.88 mts)</option>
            <option value="6' 3">6' 3" (1.91 mts)</option>
            <option value="6' 4">6' 4" (1.93 mts)</option>
            <option value="6' 5">6' 5" (1.96 mts)</option>
            <option value="6' 6">6' 6" (1.98 mts)</option>
            <option value="6' 7">6' 7" (2.01 mts)</option>
            <option value="6' 8">6' 8" (2.03 mts)</option>
            <option value="6' 9">6' 9" (2.06 mts)</option>
            <option value="6' 10">6' 10" (2.08 mts)</option>
            <option value="6' 11">6' 11" (2.11 mts)</option>
            <optgroup label="&nbsp;&nbsp;&nbsp;"></optgroup>
            <option value="7'+">7' (2.13 mts) plus</option>
        </select><br><br>
        <label for="mstatus">Marital Status : </label><select name="MaritalStatus">
            <option value="" selected="selected">Please Select</option>
            <option value="Never Married">Never Married</option>
            <option value="Married">Married</option>
            <option value="Awaiting Divorce">Awaiting Divorce</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
            <option value="Annulled">Annulled</option>
        </select><br><br>
        <label for="mtongue">Mother Tongue: <select name="mtongue">
                <option value="" selected="selected">Please Select</option>
                <optgroup label="&nbsp;"></optgroup>
                <optgroup label="North India">
                    <option value="Hindi">Hindi</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Bihari/Maithili">Bihari/Maithili</option>
                    <option value="Rajasthani/Jaipuri">Rajasthani/Jaipuri</option>
                    <option value="Haryanvi">Haryanvi</option>
                    <option value="Himachali/Pahari">Himachali/Pahari</option>
                    <option value="Kashmiri">Kashmiri</option>
                    <option value="Sindhi">Sindhi</option>
                    <option value="Urdu">Urdu</option>
                </optgroup>
                <optgroup label="&nbsp;&nbsp;"></optgroup>
                <optgroup label="West">
                    <option value="Marathi">Marathi</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Kutchi">Kutchi</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Konkani">Konkani</option>
                    <option value="Sindhi">Sindhi</option>
                </optgroup>
                <optgroup label="&nbsp;&nbsp;&nbsp;"></optgroup>
                <optgroup label="South">
                    <option value="Tamil<">Tamil</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Kannada">Kannada</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Tulu">Tulu</option>
                <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;"></optgroup>
                <optgroup label="East">
                    <option value="Bengali">Bengali</option>
                    <option value="Oriya">Oriya</option>
                    <option value="Assamese">Assamese</option>
                    <option value="Sikkim/ Nepali">Sikkim/ Nepali</option>
                </optgroup>
                <optgroup label="---------">
                    <option value="English">English</option>
                </optgroup>
            </select><br><br>
            <label for="religion">Religion : </label><select name="religion">
                <option value="" selected="selected">Select a Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="Buddhist">Buddhist</option>
                <option value="Jain">Jain</option>
                <option value="Parsi">Parsi</option>
                <option value="Jewish">Jewish</option>
                <option value="Bahai">Bahai</option>
            </select><br><br>Country: <select name="countryofresidence" tabindex="12">
                <optgroup label="Frequently Used">
                    <option value="India" label="India">India</option>
                    <option value="USA" label="USA">USA</option>
                    <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
                    <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                    <option value="Canada" label="Canada">Canada</option>
                    <option value="Australia" label="Australia">Australia</option>
                    <option value="New Zealand" label="New Zealand">New Zealand</option>
                    <option value="Pakistan" label="Pakistan">Pakistan</option>
                    <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                    <option value="Kuwait" label="Kuwait">Kuwait</option>
                    <option value="South Africa" label="South Africa">South Africa</option>
                </optgroup>
                <optgroup id="countryofresidence-optgroup-More" label="More">
                    <option value="Afghanistan" label="Afghanistan">Afghanistan</option>
                    <option value="Australia" label="Australia">Australia</option>
                    <option value="Austria" label="Austria">Austria</option>
                    <option value="Bahrain" label="Bahrain">Bahrain</option>
                    <option value="Bangladesh" label="Bangladesh">Bangladesh</option>
                    <option value="Belgium" label="Belgium">Belgium</option>
                    <option value="Botswana" label="Botswana">Botswana</option>
                    <option value="Brunei" label="Brunei">Brunei</option>
                    <option value="Canada" label="Canada">Canada</option>
                    <option value="Chile" label="Chile">Chile</option>
                    <option value="China" label="China">China</option>
                    <option value="Cyprus" label="Cyprus">Cyprus</option>
                    <option value="Denmark" label="Denmark">Denmark</option>
                    <option value="Dominican Republic" label="Dominican Republic">Dominican Republic</option>
                    <option value="Fiji Islands" label="Fiji Islands">Fiji Islands</option>
                    <option value="Finland" label="Finland">Finland</option>
                    <option value="France" label="France">France</option>
                    <option value="Germany" label="Germany">Germany</option>
                    <option value="Greece" label="Greece">Greece</option>
                    <option value="Guyana" label="Guyana">Guyana</option>
                    <option value="Hong Kong SAR" label="Hong Kong SAR">Hong Kong SAR</option>
                    <option value="Hungary" label="Hungary">Hungary</option>
                    <option value="India" label="India" selected="selected">India</option>
                    <option value="Indonesia" label="Indonesia">Indonesia</option>
                    <option value="Iran" label="Iran">Iran</option>
                    <option value="Ireland" label="Ireland">Ireland</option>
                    <option value="Israel" label="Israel">Israel</option>
                    <option value="Italy" label="Italy">Italy</option>
                    <option value="Jamaica" label="Jamaica">Jamaica</option>
                    <option value="Japan" label="Japan">Japan</option>
                    <option value="Kenya" label="Kenya">Kenya</option>
                    <option value="Kuwait" label="Kuwait">Kuwait</option>
                    <option value="Malaysia" label="Malaysia">Malaysia</option>
                    <option value="Maldives" label="Maldives">Maldives</option>
                    <option value="Mauritius" label="Mauritius">Mauritius</option>
                    <option value="Mexico" label="Mexico">Mexico</option>
                    <option value="Nepal" label="Nepal">Nepal</option>
                    <option value="Netherlands" label="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles" label="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Zealand" label="New Zealand">New Zealand</option>
                    <option value="Norway" label="Norway">Norway</option>
                    <option value="Oman" label="Oman">Oman</option>
                    <option value="Pakistan" label="Pakistan">Pakistan</option>
                    <option value="Philippines" label="Philippines">Philippines</option>
                    <option value="Poland" label="Poland">Poland</option>
                    <option value="Qatar" label="Qatar">Qatar</option>
                    <option value="Russia" label="Russia">Russia</option>
                    <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                    <option value="Singapore" label="Singapore">Singapore</option>
                    <option value="South Africa" label="South Africa">South Africa</option>
                    <option value="Spain" label="Spain">Spain</option>
                    <option value="Sri Lanka" label="Sri Lanka">Sri Lanka</option>
                    <option value="Sweden" label="Sweden">Sweden</option>
                    <option value="Switzerland" label="Switzerland">Switzerland</option>
                    <option value="Tanzania" label="Tanzania">Tanzania</option>
                    <option value="Thailand" label="Thailand">Thailand</option>
                    <option value="Trinidad and Tobago" label="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="USA" label="USA">USA</option>
                    <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
            </select>
            <br><br>
            <label for="mtongue">Highest Education Qualification: <select name="EducationQualification" required>
                    <option value="" selected="selected">Please Select</option>
                    <optgroup label="&nbsp;"></optgroup>
                    <optgroup label="Engineering">
                        <option value="BE/B-TECH<">BE/B-TECH</option>
                        <option value="ME/M.TECH">ME/MTECH</option>
                        <option value="MsEng">M.S Engineering</option>
                        <option value="EngDiploma">Enginnering Diploma</option>
                        <option value="AE">AE</option>
                        <option value="AET">AET</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="COMMERCE/FINANCE">
                        <option value="Bcom">B.Com</option>
                        <option value="CA">CA</option>
                        <option value="CFA">CFA</option>
                        <option value="Mcom">M.Com</option>
                        <option value="PDG">PGD FINANCE</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Medical">
                        <option value="MBBS">MBBS</option>
                        <option value="BAMS">BAMS</option>
                        <option value="BHMS">BHMS</option>
                        <option value="BDS">BDS</option>
                        <option value="MS">MS</option>
                        <option value="MD">MD</option>
                        <option value="Bpharm">B.Pharm</option>
                        <option value="Mpharm">M.Pharm</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Arts">
                        <option value="BA">BA</option>
                        <option value="B.Ed">B.Ed</option>
                        <option value="BFA">BFA</option>
                        <option value="MA">MA</option>
                        <option value="BSW">BSW</option>
                        <option value="MSW">MSW</option>
                        <option value="M.Ed">M.Ed</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="LAW">
                        <option value="LLB">LLB</option>
                        <option value="LLM">LLM</option>
                        <option value="ALA">ALA</option>
                        <option value="LLB Hons">LLB Hons.</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Other">
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Honors">Honours</option>
                        <option value="Associate">Associate</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;"></optgroup>
                    <optgroup label="Non Graduate">
                        <option value="High School">High School</option>
                        <option value="Less than High School">Less than High School</option>
                    </optgroup>
                </select>
                <br><br>
                <label for="Work As">You Work as :</label>
                <select name="work" required>
                    <option value="" selected="selected">-----Select Here-----</option>
                    <option value="Private Company">Private Company</option>
                    <option value="Government Sector">Government Sector</option>
                    <option value="Defence Service">Defence Service</option>
                    <option value="Bussiness/Self Employeed">Bussiness/Self Employeed</option>
                    <option value="Not Working">Not Working</option>
                </select><br><br>
                <label for="YearlyIncome">Yearly Income :</label>
                <select name="YearlyIncome" required>
                    <option value="" selected="selected">-----Select Here-----</option>
                    <option value="Upto 1 lakh">Upto 1 lakh</option>
                    <option value="1 to 2 Lakh">1 to 2 Lakh</option>
                    <option value="2 to 4 Lakh">2 to 4 Lakh</option>
                    <option value="4 to 10 Lakh">4 to 10 Lakh</option>
                    <option value="10 to 30 Lakh">10 to 30 Lakh</option>
                    <option value="50 Lakh to 1 Crore">50 Lakh to 1 Crore</option>
                    <option value="Above 1 Crore">Above 1 Crore</option>
                </select><br><br>
                <label for="About">Tell us About Yourself :</label>
            <textarea name="About" cols="30" rows="5" style="resize: none;"></textarea>
            <br><br>
                <button type="submit" name="submit">SAVE</button>
    </form> -->
</body>

</html>

