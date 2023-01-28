<?php  
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
?>
<html>
<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balance form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/formDes.css">
    <script type="text/javascript" src="../asset/balanceAddVal.js"></script>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="../control/balanceAddCheck.php" class="p-3 mt-3">
            <div class="form-field">
                <input type="number" step="0.01" name="amount" placeholder="Amount" value="">
            </div>
            <input type="hidden" name="amountType" value="income">
            <button class="btn mt-3" type="submit">Add Income</button>
        </form>
        <div class="text-center">
                <a href="#" onclick="closeBalanceAddForm();">Close</a>   
            </div>
    </div>
</body>
</html>



