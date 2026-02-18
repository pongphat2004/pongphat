<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914012 พงษ์พัฒน์ ถาวันดี</title>
</head>

<body>
<h1>พงษ์พัฒน์ ถาวันดี </h1>

<form method="post"actipn="">
	ค้นหา <input type="string" name="a" autofocus required>
    <button type="submit"name="submit">OK</button>

<table border="1">
<tr>
	<td>Ordrer ID</td>
    <td>ชื่อสินค้า</td>
    <td>ประเภทสินค้า</td>
    <td>วันที่</td>
    <td>ประเทศ</td>
    <td>จำนวนเงิน</td>
    <td>รูปภาพ</td>
</tr>

<?php  
include_once("connectdb.php");
@$kw = $_POST['a'];
$sql = "SELECT * FROM popsupermarket
WHERE p_country LIKE '%{$kw}%' OR p_product_name LIKE '%{$kw}%' OR p_product_name LIKE '%{$kw}%' " ;
$rs = mysqli_query($conn, $sql);
$total = 0;
while ($data = mysqli_fetch_array($rs)){
	$total += $data['p_amount'];
?>
<tr>
    <td><?php echo $data['p_order_id'];?></td>
    <td><?php echo $data['p_product_name'];?></td>
    <td><?php echo $data['p_category'];?></td>
    <td><?php echo $data['p_date'];?></td>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['p_amount'],0);?> </td>
    <td><img src="images/<?php echo $data['p_product_name'];?>.jpg" width="55"> </td>
</tr>
<?php 
} 
?>
<tr>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><strong><?php  echo number_format($total,0);?></strong></td>
    <td>&nbsp;</td>
</tr>

<?php
mysqli_close($conn);
?>
    
</table>

</body>
</html>