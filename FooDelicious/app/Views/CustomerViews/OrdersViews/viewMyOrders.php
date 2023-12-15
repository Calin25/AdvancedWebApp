<h1 class="center-text"> My Orders </h1>
<style>
    table {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<table>
    <col width="20">
    <col width="100">
    <col width="100">
    <col width="100">
    <col width="100">
<tr>
    <th align="center ">Order Number</th>
    <th align="center ">Order Date</th>
    <th align="center ">Required Date</th>
    <th align="center ">Shipped Date</th>
    <th align="center ">Status</th>
    <th align="center ">Product Code</th>
    <th align="center ">Quantity</th>
    <th align="center ">Price Per Each</th>
    <th align="center ">Total</th>
    
</tr>
<?php foreach($orders as $row){?>
    <tr>
    <td><?php echo $row['orderNumber'];?></td>
    <td><?php echo $row['orderDate'];?></td>
    <td><?php echo $row['requiredDate'];?></td>
    <td><?php echo $row['shippedDate'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['productCode'];?></td>
    <td><?php echo $row['quantityOrdered'];?></td>
    <td><?php echo '&#8364;' . $row['priceEach'];?></td>
    <td><?php echo '&#8364;' . number_format($row['quantityOrdered'] * $row['priceEach'], 2);?></td>
    

    <td><a href="<?php echo base_url('drillDownOrder/'.$row['orderNumber']); ?>"> <button>View Order</button></a></td>
    <td><a href="<?php echo base_url('AddReview/'.$row['productCode']); ?>"> <button>Leave Review</button></a></td>

     
    </tr>
    
    </tr>

<?php }?>
</table>


