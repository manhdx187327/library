
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        div{
            background-color: peachpuff;width: 40%; height: 400px; margin: auto;
        }
        .fielset{
            margin: auto; width: 70%; height: 350px; padding-top: -50px; border-radius: 10px;
        }
        .btn{
            padding-top: 40px; margin-left: 105px;
        }
        .phan1{
            padding-left: 40px;
        }
        .lg{
            color: coral; font-size: 50px;
        }
        .img
        {
            width: 300px; padding-left: 8%;
        }
        .btn1
        {
            background-color: coral; padding: 10px 20px; border-radius: 10px; border-style: none;
        }
    </style>
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
</head>
<body>
<div>
    <form method="post" action="loginXuLy.php">
    <fieldset class="fielset">
        <legend class="lg">Login</legend>
        <p class="phan1">EMAIL: &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="mail" id="mail"></p> <br>
        <p class="phan1">PASSWORD: &nbsp; &nbsp; <input type="password" name="pw" id="pw"></p>
        <p class="btn">
            <input type="submit" value="LOGIN" id="login"  class="btn1" onclick="return ValidateForm()">
            <input type="button" value="RESET" id="reset" class="btn1" >
        </p>
        <img class="img" src="img/img4.png">
    </fieldset>
    </form>
</div>
</body>
