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
    
</tr>
<?php foreach($orders as $row){?>
    <tr>
    <td><?php echo $row['orderNumber'];?></td>
    <td><?php echo $row['orderDate'];?></td>
    <td><?php echo $row['requiredDate'];?></td>
    <td><?php echo $row['shippedDate'];?></td>
    <td><?php echo $row['status'];?></td>
    

    <td><a href="<?php echo base_url('drillDownOrder/'.$row['orderNumber']); ?>"> <button>View Order</button></a></td>
     
    </tr>
    
    </tr>

<?php }?>
</table>


