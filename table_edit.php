
<?php
include('db.php');
include('header.php');
?>





<div class="table-responsive" >

<table class="table">
<tr >
<th>Date</th>
<th>Item</th>
<th>Quantity Left</th>
<th>Qty Sold </th>
<th>Price</th>
<th>Sales</th>
</tr>
<?php


$sql=mysql_query("select * from product");
$i=1;
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];

$product=$row['product_name'];
$manu=$row['manu_name'];
$qtyleft=$row['qtyleft'];
$qty_sold=$row['qty_sold'];
$price=$row['price'];
$sales=$row['sales'];

if($i%2)
{
?>
<tr id="<?php echo $id; ?>" class="edit_tr">
<?php } else { ?>
<tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
<?php } ?>
<td class="edit_td">
<span class="text"><?php echo "Date"; ?></span> 
</td>
<td>
<span class="text"><?php echo $item; ?></span> 
</td>
<td>
<span class="text"><?php echo $qtyleft; ?></span>
</td>
<td>

<span id="last_<?php echo $id; ?>" class="text">
<?php
$sqls=mysql_query("select * from sales where date='$da' and product_id='$id'");
while($rows=mysql_fetch_array($sqls))
{
echo $rows['qty'];
}
?>
</span> 
<input type="text" value="<?php echo $rtrt; ?>"  class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>
<td>
<span id="first_<?php echo $id; ?>" class="text"><?php echo $price; ?></span>
<input type="text" value="<?php echo $price; ?>" class="editbox" id="first_input_<?php echo $id; ?>" />
</td>
<td>

<span class="text"><?php echo $dailysales; ?>
<?php
$sqls=mysql_query("select * from sales where date='$da' and product_id='$id'");
while($rows=mysql_fetch_array($sqls))
{
$rtyrty=$rows['qty'];
$rrrrr=$rtyrty*$price;
echo $rrrrr;
}

?>
</span> 
</td>
</tr>

<?php
$i++;
}
?>

</table>
<br />
Total Sales of this day:
	    <b>Php <?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}		
$result1 = mysql_query("SELECT sum(sales) FROM sales where date='$da'");
while($row = mysql_fetch_array($result1))
{
    $rrr=$row['sum(sales)'];
	echo formatMoney($rrr, true);
 }

?></b><br /><br />
<input name="" type="button" value="Print" onclick="javascript:child_open()" style="cursor:pointer;" />
</div>

<?php

include('footer.php');
?>
