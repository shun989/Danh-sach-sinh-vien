<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "fileClass/Student.php";
    include_once "fileClass/StudentManager.php";

    $name = $_REQUEST['name'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $math = $_REQUEST['math'];
    $phys = $_REQUEST['phys'];
    $chem = $_REQUEST['chem'];

    $data = [
        'name' => $name,
        'dob' => $dob,
        'address' => $address,
        'math' => $math,
        'phys' => $phys,
        'chem' => $chem,
    ];

    $userManager = new StudentManager('data.json');
    $userManager->add($data);

    header('location: index.php');

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 25px;
    }
</style>
<body>
<h1 style="color: blue">Thêm học sinh.</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Nhập tên"></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type="text" name="dob" placeholder="Nhập ngày sinh"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
        </tr>
        <tr>
            <td>Điểm toán</td>
            <td><input type="number" name="math" placeholder="Nhập điểm toán"></td>
        </tr>
        <tr>
            <td>Điểm lý</td>
            <td><input type="number" name="phys" placeholder="Nhập điểm lý"></td>
        </tr>
        <tr>
            <td>Điểm hóa</td>
            <td><input type="number" name="chem" placeholder="Nhập điểm hóa"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Thêm học sinh</button></td>
        </tr>
    </table>
</form>
</body>
</html>
