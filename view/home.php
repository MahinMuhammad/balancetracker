<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
?>
<html>
<head>
    <title>Home</title>
</head>
    <body>
        <fieldset align=center>
            <legend>HOME</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td width="300"><a href='home.php'> ADD ACCOUNT </a></td>
                    <td><a href='Settings.php'> SETTINGS </a></td>
                    <td><a href='home.php'> ABOUT US </a></td>
                    <td><a href='../control/logout.php'> LOGOUT </a></td>
                </tr>
            </table>
            <h1>Wellcome <?php require_once "../model/userModel.php"; echo getRealName($_COOKIE['status']);?> </h1>
            <h2>Account List</h2>
            <form method="post" action="../control/accountCheck.php" enctype="">
                <table width="150" border="2" align="center">
                    <tr align="center">
                        <td>
                            <select name="AccountId">
                                <?php
                                    $list = getAccountList($_COOKIE['status']);
                                    if(count($list) == 0)
                                    {
                                        echo "<option value='empty'>Create Account</option>";
                                    }
                                    else
                                    {
                                        for ($i=0; $i < count($list); $i++) 
                                        { 
                                            echo "<option value='".$list[$i]['AccountId']."'>".$list[$i]['AccountName']."</option>";
                                        } 
                                    }
                                ?>                         
                            </select>
                        </td>
                    </tr>
                    <tr align="center">
                        <td><input type="submit" name="submit" value="OPEN"></td>
                    </tr>
                </table>
            </form>
            
        </fieldset>
    </body>
</html>



