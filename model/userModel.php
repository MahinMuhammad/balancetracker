<?php 
    require_once "db.php";

    function login_db($userName, $password)
    {
        $conn = getConnection();
		$sql = "select * from user_tab where user_name='{$userName}' and user_pass='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0)
        {
            return true;
        }else{
            return false;
        }
    }

    function searchUserName_db($user){
        $conn = getConnection();
        $sql = "select * from user_tab where user_name='{$user['username']}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function registration_db($user)
    {
        $conn = getConnection();
		$sql = "insert into user_tab values('{$user['username']}', '{$user['name']}', '{$user['pass']}', default, default)";
        if(mysqli_query($conn, $sql))
        {
            return true;
        }else{
            return false;
        }
    }

    function addIncome($amount, $userName){
        $conn = getConnection();
        $sql = "update user_tab set income=income+'{$amount}' where user_name='{$userName}'";
        if(mysqli_query($conn, $sql))
        {
            return true;
        }else{
            return false;
        }
    }

    function addExpense($amount, $userName){
        $conn = getConnection();
        $sql = "update user_tab set expense=expense+'{$amount}' where user_name='{$userName}'";
        if(mysqli_query($conn, $sql))
        {
            return true;
        }else{
            return false;
        }
    }

    function getRow($userName)
    {
        $conn = getConnection();
        $sql = "select * from user_tab where user_name='{$userName}'";
        $result = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($result);
        return $value;
    }

    function getIncome($userName){
        $value = getRow($userName);
        return $value['income'];
    }

    function getExpense($userName){
        $value = getRow($userName);
        return $value['expense'];
    }
?>













