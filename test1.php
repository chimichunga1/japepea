<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$connect = mysqli_connect("localhost", "root", "miguel", "inventory");

mysqli_select_db($connect,"ajax_demo");
$sql="SELECT * FROM admin_accounts WHERE user_id = '$q'";
$result = mysqli_query($connect,$sql);

echo "<table>
<tr>
<th>Firstname</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['user_id'] . "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($connect);
?>
</body>
</html>