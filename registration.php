<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/regist.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php
        include 'connection/connection.php';

        $query="SELECT max(ID_MEMBER) as maxID FROM member";
        $hasil=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
        $ID_MEMBERS=$data['maxID'];

        $nourut=(int) substr($ID_MEMBERS,3,3);
        $nourut++;
        $char="IDM";
        $newID=$char.sprintf("%03s",$nourut);

    ?>
        <form class="box-form" action="process/registerprocess.php" method="post">
        <h1>Register</h1>
        <h5>Please fill in this form to create an account.</h5><hr>
            <input type="hidden" name="ID_MEMBER" value="<?php echo $newID;?>" readonly="readonly"><br>
            Username :<br>      
                <input type="text" name="USERNAME" placeholder="Enter Your Username" required/><br>
            Password :<br>
                <input type="password" name="PASSWORD" placeholder="Enter Your Password" required/><br>
            Full Name :<br>
                <input type="text" name="NAME" placeholder="Enter Your Full Name" required><br>
            Gender :<br>
                <label class="container">Male
                <input type="radio" checked="checked" value="M" name="GENDER">
                <span class="checkmark"></span>
                </label>
                <label class="container">Female
                <input type="radio" checked="checked" value="F" name="GENDER">
                <span class="checkmark"></span>
                </label>
                <br>

            Email :<br>
                <input type="text" name="EMAIL" placeholder="Email@Example.com" required><br>
            
            Cell Phone :<br>
                <input type="text" name="CELLPHONE" placeholder="Enter Your Phone Number" required/><br><br>
            Address :<br><br>
                <textarea name="ADDRESS" rows="5" cols="50" type="address" placeholder="Enter Your Real Address"></textarea>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <div class="button1">
                <input type="submit" name="cancel" value="Cancel" onClick="window.location='login.php';" />
                <input type="submit" name="submit" value="Register Now"  >
                 </div>
                <br><p style="text-align:center"> Already a member ?<a href="login.php"> Sign In</a></p><br>
        </form>        
       
</body>
</html>