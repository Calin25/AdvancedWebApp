<h1 class="center-text"> View All Reviews </h1>
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
   
    <th align="center ">Catgory</th>
    <th align="center ">Stars Rating</th>
    <th align="center ">Supplier</th>
    <th align="center ">Product Description</th>
    <th align="center ">Customer Review</th>
    <th align="center ">Date</th>
    
    
</tr>
<?php foreach($reviews as $row){?>
    <tr>
    <td><?php echo $row['category'];?></td>
    <td><?php echo $row['stars'];?></td>
    <td><?php echo $row['supplier'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['customerReview'];?></td>
    <td><?php echo $row['date'];?></td>
    

    <td><a href="<?php echo base_url(); ?>"> <button>Amend Review</button></a></td>
     
    </tr>
    
    </tr>

<?php }?>
</table>


