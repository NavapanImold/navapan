<?php
$p_price=$_GET['pprice'];
$p_amount = $_GET['pamount'];
$p_totalprice = $p_price*$p_amount;
$p_tax =$p_totalprice*0.07;
$p_netprice = $p_totalprice+$p_tax;

echo"ราคาสินค้าต่อขึ้น = $p_price<br>";
echo"จำนวนซื้อที่ซื้อ = $p_amount<br>";
echo"ราคารวม = $p_totalprice<br>";
echo"ภาษีมูลค่าเพิ่ม = $p_tax<br>";
echo"ราคาสุทธิ = $p_netprice";
?>