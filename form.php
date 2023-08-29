<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['submit'])){
            $email=$_GET['email'];
            $emailRegex =" /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
            if(preg_match($emailRegex,$email)){
                echo"VALID;signup completed; inserted to db";
            }
            else{
                echO"INVALID";
            }
        }
    ?>
    <form action="" method="get" onsubmit="return validateForm()">
        <div>
            <h3>Signup</h3>
        </div>
        <div>
            First Name:
            <input type="text" name="fn" id="fn" required>
            Last Name:
            <input type="text" name="ln" id="ln" required>
        </div>
        <div>
            Email:
            <input type="email" name="email" id="email" required>
        </div>
        
        <div>
            Password:
            <input type="password" name="pw" id="pw" required>
        </div>
        <div id="emailError"></div>
        <br>
        <div><input type="submit" value="Signup" name="Submit"></div>

    </form>
    <script>
    function validateForm() {

        var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        var email = document.getElementByID('email').value;
        if (emailRegex.test(email)) {
            return true;
        } else {
            document.getElementById("email2").innerHTML = "Invalid email";
        }
    }
    </script>
</body>
</html>