<h1 class="center-text"> List of Baked Goods </h1>
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
    <th align="center ">Produce Code</th>
    <th align="center ">Description</th>
    <th align="center ">Category</th>
    <th align="center ">Supplier</th>
    <th align="center ">Quantity</th>
    <th align="center ">Bulk Buy Price</th>
    <th align="center ">Bulk Sale Price</th>
    <th align="center ">Image</th>
</tr>
<?php foreach($categoryProducts as $row){?>
    <tr>
    <td><?php echo $row['produceCode'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['category'];?></td>
    <td><?php echo $row['supplier'];?></td>
    <td><?php echo $row['quantityInStock'];?></td>
    <td><?php echo $row['bulkBuyPrice'];?></td>
    <td><?php echo $row['bulkSalePrice'];?></td>
    <td><?php echo $row['photo'];?></td>
    
    <td><img src="<?php echo base_url(); ?>/assets/images/products/thumbs/<?=
    $row['photo'] ?>"/>
       <td><a href="<?php echo base_url('drillDownProducts/'.$row['produceCode']); ?>"> View Product</a></td>
     
    </tr>

<?php }?>
</table>

    <div class="d-flex justify-content-center">
        <?php if ($pager)
        echo $pager->links();
        ?>
    </div>