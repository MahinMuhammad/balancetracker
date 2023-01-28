<?php  
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT); //to catch error
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
    require_once "../model/userModel.php";

    $income = getIncome($_COOKIE['status']);
    $expense = getExpense($_COOKIE['status']);
?>
<html>
<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/homeDes.css">
    <script type="text/javascript" src="../asset/balanceAddVal.js"></script>
</head>
    <body>
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadBalanceAddForm('../view/incomeForm.php');">ADD INCOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadBalanceAddForm('../view/expenseForm.php');">ADD EXPENSE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick= "alert('Will be availavle on next update!')">SETTINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick= "alert('An balance tracker webapp developed my Mahinur Rahman.')">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='../control/logout.php'> LOGOUT </a>
                </li>
            </ul>
        </nav>
        <div id="outerBox">
            <div id="innerBox">
                <table width="100%">
                    <tr>
                        <td>Total Income</td>
                        <td align="right"><?php echo $income; ?></td>
                    </tr>
                    <tr>
                        <td>Total Expense</td>
                        <td align="right"><?php echo $expense; ?></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td>Current Balance</td>
                        <td align="right"><?php echo  $income-$expense; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="extraFormSpace">
            
        </div>
    </body>
</html>



