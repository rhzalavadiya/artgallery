<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            /* user-select: none; */
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: grid;
            place-items: center;
            background: #dde1e7;
            text-align: center;
        }

        .content {
            width: 400px;
            padding: 40px 30px;
            background: #dde1e7;
            border-radius: 10px;
            box-shadow: -3px -3px 7px #ffffff73,
                2px 2px 5px rgba(94, 104, 121, 0.288);
        }

        .content .text {
            font-size: 33px;
            font-weight: 600;
            margin-bottom: 40px;
            color: #3c999c;
        }

        .field {
            height: 50px;
            width: 100%;
            display: flex;
            position: relative;
        }

        .field:nth-child(2) {
            margin-top: 20px;
        }

        .field input {
            height: 100%;
            width: 100%;
            padding-left: 45px;
            outline: none;
            border: none;
            font-size: 18px;
            background: #dde1e7;
            color: #595959;
            border-radius: 25px;
            box-shadow: inset 2px 2px 5px #BABECC,
                inset -5px -5px 10px #ffffff73;
        }

        .field input:focus {
            box-shadow: inset 1px 1px 2px #BABECC,
                inset -1px -1px 2px #ffffff73;
        }

        .field span {
            position: absolute;
            color: #595959;
            width: 50px;
            line-height: 50px;
        }

        .field label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 45px;
            pointer-events: none;
            color: #666666;
        }

        .field input:valid~label {
            opacity: 0;
        }

        .forgot-pass {
            text-align: left;
            margin: 10px 0 10px 5px;
        }

        .forgot-pass a {
            font-size: 16px;
            color: #3c999c;
            text-decoration: none;
        }

        .forgot-pass:hover a {
            text-decoration: underline;
        }

        .b1 {
            margin: 15px 0;
            width: 100%;
            height: 50px;
            font-size: 18px;
            line-height: 50px;
            font-weight: 600;
            background: #dde1e7;
            border-radius: 25px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #595959;
            box-shadow: 2px 2px 5px #BABECC,
                -5px -5px 10px #ffffff73;
        }

        .b1:focus {
            color: #3c999c;
            box-shadow: inset 2px 2px 5px #BABECC,
                inset -5px -5px 10px #ffffff73;
        }

        .sign-up {
            margin: 10px 0;
            color: #595959;
            font-size: 16px;
        }

        .sign-up a {
            color: #3c999c;
            text-decoration: none;
        }

        .sign-up a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="text">
            Change Password
        </div>
        <form method="post">
            <div class="field">
                <input type="text" name="unm" required>
                <span class="fas fa-user"></span>
                <label>User Name</label>
            </div>
            <br>
            <div class="field">
                <input type="password" name="pass" required>
                <span class="fas fa-lock"></span>
                <label>New Password</label>
            </div>
            <br>
            <div class="field">
                <input type="password" name="cpass" required>
                <span class="fas fa-lock"></span>
                <label>Confirm Password</label>
            </div>
            <input type="submit" name="change" value="Change Password" class="b1"></input>
        </form>
    </div>
</body>
</html>
<?php
error_reporting(E_ERROR | E_PARSE);

session_start();
include "../conn.php";
$unm=$_POST['unm'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if (isset($_POST['change']))
{
    //echo $unm.'  '.$pass.'  '.$cpass;
    if($pass===$cpass)
    {
        $query=mysqli_query($con,"update login set pass='$pass',cpass='$cpass'where unm='$unm'");
	    echo "<script>window.location='alogin.php';</script>";
    }
    else
    {
        echo "<script>window.location='forgot_pass.php';</script>";
    }
}
?>