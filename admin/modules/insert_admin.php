<?php require_once ("../layouts/header.php")?>
<header>
    <?php require_once ("../layouts/header.php")?>
    <?php
    include("include/open.php");
    ?>
    <div class="insert">
        <form method="post" action="insert_admin_xuly.php" style="padding-top: 100px"  enctype="multipart/form-data">
            <fieldset style="padding-left:400px;">
                <legend style="font-size: 30px;">Thêm admin</legend>
                <table style="border: 0px">
                    <tr>
                        <td>Tên admin</td>
                        <td><input type="text" name="txtName" id="txtName"/></td>
                        <Td>
                            <div id="divNameError" style="color:#F00"></div>
                        </Td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="Email" id="Email"/></td>
                        <Td>
                            <div id="divEmailError" style="color:#F00"></div>
                        </Td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="pass" id="pw"/></td>
                        <Td>
                            <div id="divPassError" style="color:#F00"></div>
                        </Td>
                    </tr>
                </table> <br>
                <input type="submit" value="Thêm admin" onclick="return ValidateForm()" name="btnInsert" class="btn btn-outline-dark"/>
            </fieldset>
        </form>
    </div>
    <?php include("include/close.php")?>
    </body>
</header>
<?php require_once ("../layouts/footer.php")?>
