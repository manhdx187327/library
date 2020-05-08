<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="login-styles.css" />
    <title>E-LIBRARY-LOGIN</title>
</head>
<script language="javascript">
    function ValidateForm()
    {
        //alert("");
        var u=document.getElementById("mail");
        var tcEmail = /^[\w]+@[\w]+.[\w]+.?[\w]+$/;
        if(!tcEmail.test(u.value) )
        {
            alert("Email không đúng định dạng");
            u.focus();
            return false;
        }

        var x=document.getElementById("pw");
        if(x.value=="")
        {alert("Khong duoc de trong??");
            x.focus();
            return false;
        }
        return  true;
    }
</script>
<body>
<div>
    <form class="box" action="process_login.php" method="post">
        <div class="box-container">
            <div class="login-title">Welcome</div>
            <div class="account">
                <div class="login-in4">Email :</div>
                <input class="login-input" type="text" name="email" id="mail" />
            </div>
            <div class="password">
                <div class="login-in4">Password :</div>
                <input class="login-input" type="password" name="pass" id="pw" />
            </div>
            <div class="btn">
                <input class="login-btn" type="submit" value="LOGIN" id="login"  onclick="return ValidateForm()">
                <input type="button" value="REGISTER" id="reset" class="register-btn" >
            </div>
        </div>
    </form>
</div>
</body>
</html>