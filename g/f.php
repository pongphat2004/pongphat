<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรุปยอดขายตามเดือน</title>
</head>

<body>

<h1>พงษ์พัฒน์ ถาวันดี</h1>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>เดือน</th>
    <th>ยอดขายรวม</th>
</tr>

<?php
include_once("connectdb.php");

$sql = "SELECT MONTH(p_date) AS m, SUM(p_amount) AS total
        FROM popsupermarket
        GROUP BY MONTH(p_date)";

$rs = mysqli_query($conn, $sql);

$grandTotal = 0;

while ($data = mysqli_fetch_array($rs)) {
    $grandTotal += $data['total'];
?>
<tr>
    <td><?php echo $data['m']; ?></td>
    <td align="right"><?php echo number_format($data['total'], 0); ?></td>
</tr>
<?php
}
?>

<tr>
    <td align="right"><strong>รวมทั้งหมด</strong></td>
    <td align="right"><strong><?php echo number_format($grandTotal, 0); ?></strong></td>
</tr>

</table>

<?php mysqli_close($conn); ?>

</body>
</html>