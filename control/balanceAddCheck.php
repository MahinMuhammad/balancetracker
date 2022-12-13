<?php  
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT); //to catch error

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

    require_once "../model/userModel.php";

    $amount = (float)$_POST['amount'];
    $amountType = $_POST['amountType'];
    $userName = $_COOKIE['status'];

    if($amount != null && $amountType != null){
        if($amountType == 'income'){
           if(addIncome($amount, $userName))
            {
                header('location: ../view/home.php');
            } 
        }
        elseif ($amountType == 'expense') {
            if(addExpense($amount, $userName))
            {
                header('location: ../view/home.php');
            } 
        }
        
    }
    else{
        echo '<h1>Amount or amount type is Empty</h1>';
        echo'<br><a href="../view/home.php"> Go Back </a>';
    }
?>