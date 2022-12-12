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

//     function getRow($userName)
//     {
//         $conn = getConnection();
//         $sql = "select * from userTab where UserName='{$userName}'";
//         $result = mysqli_query($conn, $sql);
//         $value = mysqli_fetch_assoc($result);
//         return $value;
//     }

//     function getUserName($userName)
//     {
//         $value = getRow($userName);
//         return $value['UserName'];
//     }

//     function getRealName($userName)
//     {
//         $value = getRow($userName);
//         return $value['RealName'];
//     }

//     function changePass($userName, $password, $passwordNew)
//     {
//         $conn = getConnection();
//         $sql = "update userTab set Pass='{$passwordNew}' where UserName='{$userName}' and Pass='{$password}'";
//         mysqli_query($conn, $sql);
//         if(mysqli_affected_rows($conn))
//         {
//             return true;
//         }else{
//             return false;
//         }
//     }

//     function changeInfo($userName, $newRealName, $newUserName)
//     {
//         $conn = getConnection();
//         $sql = "update userTab set RealName='{$newRealName}', UserName='{$newUserName}' where UserName='{$userName}'";
//         mysqli_query($conn, $sql);
//         if(mysqli_affected_rows($conn))
//         {
//             return true;
//         }else{
//             return false;
//         }
//     }

//     function deleteUser($userName, $password)
//     {
//         $conn = getConnection();
//         $sql = "delete from userTab where UserName='{$userName}' and Pass='{$password}'";
//         mysqli_query($conn, $sql);
//         if(mysqli_affected_rows($conn))
//         {
//             return true;
//         }else{
//             return false;
//         }
//     }

//     function getAccountList($userName)
//     {
//         $conn = getConnection();
//         $sql = "select * from account where UserName='{$userName}'";
//         $result = mysqli_query($conn, $sql);
//         $list = [];
//         $i = 0;
//         while ($row = mysqli_fetch_assoc($result)) 
//         {
//             $list[$i] = $row;
//             $i++;
//         }
//         return $list;
//     }
// ?>













