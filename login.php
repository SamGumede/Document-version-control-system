<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_registered_users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    
    $database->closeConnection();
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script>
    function loginvalidation(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var valid = true;

        if(email == ""){
        	   valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
</head>
<body>
    <div class="demo-content">
        <form action="" method="POST"
            onsubmit="return loginvalidation();">


            <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID">
                </div>
            </div>

            <div class="row">
                <label>Password</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password">

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
                </div>
            </div>
            <div class="row">
                <div>
                    <a href="index.php"><button type="button"
                            name="submit" class="btn signup">Signup</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>