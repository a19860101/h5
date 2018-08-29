<?php
    require_once "db.php";
    $sql = "SELECT * FROM `histogram`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #999;
        }
        table {
            width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>新增資料</h2>
        <form action="new.php" method="post">
            <input type="text" name="city" placeholder="請輸入城市">
            <input type="text" name="quantity" placeholder="請輸入數量">
            <input type="submit" value="新增">
        </form>
        <table>
            <tr>
                <th>編號</th>
                <th>城市</th>
                <th>數量</th>
                <th></th>
                <th></th>
            </tr>
            <?php while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>{$row['id']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td><a href='delete.php?id={$row['id']}'onclick='return confirm(\"確認刪除？\")'>刪除</a></td>";
                // echo "<td><a href='form.php?id={$row['id']}'>修改</a></td>";
                echo "<td><form action='update.php' method='post'><input type='text' value='{$row['quantity']}' name='quantity'><input type='hidden' name='id'value='{$row['id']}'><input type='submit' value='修改'></form></td>";
                echo "</tr>";
            }?>
        </table>
        <!-- <h2>修改資料</h2>
        <form action="update.php">
            <input type="text" name="city" value="">
            <input type="text" name="num" value="">
            <input type="submit" value="新增">
        </form> -->
    </div>
</body>
</html>