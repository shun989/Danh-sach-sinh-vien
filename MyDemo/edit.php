<?php

include_once "fileClass/Student.php";
include_once "fileClass/StudentManager.php";
$studentManager = new StudentManager("data.json");
$student = $studentManager->getStudentById($_GET["id"]);
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $math = $_POST["math"];
    $phys = $_POST["phys"];
    $chem = $_POST["chem"];

    $data = $studentManager->loadDataFile();

//    print_r($data);
//    die();
    foreach ($data as $item) {
        if ($item->id == $_GET["id"]) {
            $item->name = $name;
            $item->dob = $dob;
            $item->address = $address;
            $item->math = $math;
            $item->phys = $phys;
            $item->chem = $chem;
        }
    }

    $studentManager->saveDataToFile($data);
    header("location:index.php");

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
    input {
        height: 25px;
    }
</style>
<body>
    <h1 style="color: red"> Sửa thông tin học sinh.</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Nhập tên mới"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="dob" placeholder="Ngày sinh mới"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" placeholder="Địa chỉ mới"></td>
            </tr>
            <tr>
                <td>Math</td>
                <td><input type="number" name="math" placeholder="Điểm toán mới"></td>
            </tr>
            <tr>
                <td>Phys</td>
                <td><input type="number" name="phys" placeholder="Điểm lý mới"></td>
            </tr>
            <tr>
                <td>Chem</td>
                <td><input type="number" name="chem" placeholder="Điểm hóa mới"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Edit</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>

