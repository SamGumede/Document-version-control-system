 <?php
if (isset($_POST["submit"])) {
    include_once 'DBConnect.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    $sql1 = "select name, email from tbl_registered_users where email='$email'";
    
    $user = $db->query($sql1);
    $result = $user->fetchAll();
    $_SESSION['emailname'] = $result[0]['email'];
    
    if (empty($result)) {
        $sql = "insert into tbl_registered_users (name,email, password) values('$name','$email','$password')";
        
        $db->exec($sql);
        
        $database->closeConnection();
        $response = array(
            "type" => "success",
            "message" => "You have registered successfully.<br/><a href='login.php'>Now Login</a>."
        );
    } else {
        $response = array(
            "type" => "error",
            "message" => "Email already in use."
        );
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    function signupvalidation(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_pasword = document.getElementById('confirm_pasword').value;
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    	
        var valid=true;

        if(name == ""){
            valid = false;
            document.getElementById('name_error').innerHTML = "required.";
        }

        if(email == ""){
            valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        } else {
            if(!emailRegex.test(email)){
                valid = false;
                document.getElementById('email_error').innerHTML = "invalid.";
            }
        }

        if(password == "" ){
            valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        if(confirm_pasword == "" ){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "required.";
        }

        if(password != confirm_pasword){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
        }

        return valid;
    }
    </script>
</head>
<body>
    <div class="demo-content">
        <?php
        if (! empty($response)) {
            ?>
        <div id="response" class="<?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
        <?php
        }
        ?>
        <form action="" method="POST"
            onsubmit="return signupvalidation()">
            <div class="row">
                <label>Name</label><span id="name_error"></span>
                <div>
                    <input type="text" class="form-control" name="name"
                        id="name" placeholder="Enter your name">

                </div>
            </div>

            <div class="row">
                <label>Email</label><span id="email_error"></span>
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
                <label>Confirm Password</label><span
                    id="confirm_password_error"></span>
                <div>
                    <input type="password" name="confirm_pasword"
                        id="confirm_pasword" class="form-control"
                        placeholder="Re-enter your password">

                </div>
            </div>


            <div class="row">
                <div align="center">
                    <button type="submit" name="submit"
                        class="btn signup">Sign Up</button>
                </div>
            </div>

            <div class="row">
                <div>
                    <a href="login.php"><button type="button" name="submit"
                        class="btn login">Login</button></a>
                </div>
            </div>
    
    </div>

  <div class="container">
  <div class="jumbotron">


    
          </div>
            </div>



    </form>
    </div>
</body>
</html>