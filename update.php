<?php
session_start();
require_once "connections.php";
static $mno=' ';
static $status=' ';
static $dob=' ';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="myprofile.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="profiles.php">Profiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="update.php">Edit Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>    
<h3>Update Profile</h3>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Mobile Number: <input type="text" name="MobileNumber" required minlength="10"><br><br>
<label for="mstatus">Marital Status : </label><select name="MaritalStatus" required>
            <option value="" selected="selected">Please Select</option>
            <option value="NeverMarried">NeverMarried</option>
            <option value="Married">Married</option>
            <option value="Awaiting Divorce">Awaiting Divorce</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
            <option value="Annulled">Annulled</option>
        </select><br><br>
        Date Of Birth:<input type="date" name="DOB" max="2003-07-02" required><br><br>
        <button type="submit" name="submit">Update</button>
        <a href="myprofile.php">Cancel</a>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $mno=$_POST["MobileNumber"];
    $status=$_POST["MaritalStatus"];
    $date=$_POST["DOB"];
    $sr=$_SESSION['Sr.No'];
    $sql="UPDATE userinfo SET MobileNo='$mno',dob='$date',MaritalStatus='$status' where SrNo='$sr'";
    $edit=mysqli_query($connect,$sql);
    if($edit)
    {
        mysqli_close($connect);
        header("location:myprofile.php");
        exit;
    }
    else
    {
        echo "Error try again";
    }
}
?>