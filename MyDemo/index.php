<?php

include_once "fileClass/Student.php";
include_once "fileClass/StudentManager.php";

$studentManager = new StudentManager('data.json');
$students = $studentManager->getAll();

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

    table {
        border: 1px black solid;
        border-collapse: collapse;
        width: 100%;
        height: 30px;
        text-align: center;
    }

    th {
        height: 30px;
    }

    td {
        height: 25px;
    }

    tr:hover {
        background-color: wheat;
        cursor: pointer;
    }

    h1 {
        text-align: center;
    }
</style>
<body>

<div class="container">
    <h1 style="color: blue">Danh sách học sinh.</h1>
    <a href="add.php"><button style="font-size: 20px; padding: 10px 20px">Thêm học sinh</button></a>
    <table border="">
        <p></p>
        <tr style="background-color: lawngreen; font-size: 20px">
            <th>STT</th>
            <th>Name</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Điểm toán</th>
            <th>Điểm lý</th>
            <th>Điểm hóa</th>
            <th>GPA</th>
            <th colspan="2">Tùy chọn</th>
        </tr>
        <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $key + 1; ?> </td>
                <td><?php echo $student->getName(); ?> </td>
                <td><?php echo $student->getDob(); ?> </td>
                <td><?php echo $student->getAddress(); ?> </td>
                <td><?php echo $student->getMath(); ?> </td>
                <td><?php echo $student->getPhys(); ?> </td>
                <td><?php echo $student->getChem(); ?> </td>
                <td><?php echo $student->getGPA(); ?> </td>
                <td><a onclick="return confirm('Are you want delete?')"
                       href="delete.php?id=<?php echo $key ?>"><button>Delete</button></a></td>
                <td><a onclick="return confirm('Are you want edit?')"
                       href="edit.php?id=<?php echo $student->getId() ?>"><button>Edit</button></a></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
