<h1 class="center-text"> All Products </h1>
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
    <th align="center ">Order Date</th>
    <th align="center ">Required Date</th>
    <th align="center ">Shipped Date</th>
    <th align="center ">Status</th>
    <th align="center ">Comments</th>
</tr>
<?php foreach($orders as $row){?>
    <tr>
    <td><?php echo $row['orderDate'];?></td>
    <td><?php echo $row['requiredDate'];?></td>
    <td><?php echo $row['shippedDate'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['comments'];?></td>
    
    </tr>

<?php }?>
</table>


