<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telephone</title>
</head>
<body>
<form method="POST">
    <label>List phone number</label>
    <input type="text" name="phone" placeholder="Please input list phone number" style="width: 200px">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $listPhones = $_POST['phone'];
    $arrPhones = explode(',',$listPhones);
    for ($i = 0; $i < count($arrPhones); $i++){
        $number = substr($arrPhones[$i],0,3);
        switch ($number) {
            case '098':
                echo $arrPhones[$i] . ' : ' . 'Viettel';
                echo '<br>';
                break;
            case '096':
                echo $arrPhones[$i] . ' : ' . 'Mobiphone';
                echo '<br>';
                break;
            case '093':
                echo $arrPhones[$i] . ' : ' . 'Vinaphone';
                echo '<br>';
                break;
            default:
                echo $arrPhones[$i] . ' : ' . 'Can not check';
                echo '<br>';
                break;
        }
    }
}
?>
</body>
</html>