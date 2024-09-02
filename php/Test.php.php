<?php
echo "Hello";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <style type="text/css">
        body{
            background: #384047;
            font-family: sans-serif;
            font-size: 10px;
        }
        form{
            background: #fff;
            padding: 4em 4em 2em;
            max-width: 400px;
            margin: 50px auto 0;
            box-shadow: 0 0 1em #222;
            border-radius: 5px;
        }
        p{
            margin: 0 0 3em 0;
            position: relative;
        }
        label{
            background: #fff;

        }
    </style>
</head>
<body>
    <form action="#" method="post" onsubmit="return validate()">
        <p>
            <h1 style="font-size: 30px; text-align: center;">HELLO <br/>
                Registration Form

            </h1>
        </p>
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" id="password">
        </p>
        <p>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" onkeyup="check(this)">
            <error id="alert"></error>
        </p>
        <p>
            <input type="submit" name="" id="submit" value="submit">
        </p>
    </form>
</body>

<script type="text/javascript">
    var password = document.getElementById('password');
    var flag = 1; //1-> no error | 0-> yes error
    function check(elem){
        if(elem.value.length > 0){
            if(elem.value != password.value){
                document.getElementById('alert').innerText = "Confirm password does not match";
                flag=0;            }
            else{
                document.getElementById('alert').innerText = "";
                flag=1;
            }
        }
        else{
            document.getElementById('alert').innerText = "Please enter confirm password";
            flag= 0;        }
    }
    function validate(){
        if (flag==1){
            return true;

        }
        else{
            return false;
        }
    }

</script>
</html>