<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nickname = $_POST['nickname'];
 $emailadd = $_POST['emailadd'];
 $homeadd = $_POST['homeadd'];
 $gender = $_POST['gender'];
 $cellno = $_POST['cellno'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(complete_name,nickname,emailadd,homeadd,gender,cellno,comment) 
		VALUES('$complete_name','$nickname','$emailadd','$homeadd','$gender','$cellno','$comment')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 
}

if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Data Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background-image: url(bg.jpg);">
<center>

<div id="header">
 <div id="content">
    <label>Add Data Now</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickame" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="emailadd" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="homeadd" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cellno" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="20" cols="120"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button>
	<button type="submit" name="btn-cancel"><strong>Cancel</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>