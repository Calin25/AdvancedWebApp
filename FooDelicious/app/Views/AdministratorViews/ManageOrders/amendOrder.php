
<form action="<?php echo base_url();?>/AmendOrder/<?= $order['orderNumber'] ?>" method="post" enctype="multipart/form-data"> 
	</br></br> Order Number:
   	<input type="text" name="orderNumber" id="orderNumber" readonly value="<?php echo $order['orderNumber']?>"> 
	
	</br></br> Order Date:
	<input type="date" name="orderDate" id="orderDate" readonly value="<?php echo $order['orderDate']?>"> 
	
	</br></br> Required Date: 
	<input type="date" name="requiredDate" id="requiredDate" readonly value="<?php echo $order['requiredDate']?>"> 
	
	</br></br> Shipped Date:
	<input type="date" name="shippedDate" id="shippedDate" readonly value="<?php echo $order['shippedDate']?>"> 

    </br></br> Order Status:
<select name="status" id="status">

    <option  value="shipped" <?php echo ($order['status'] == 'shipped') ? 'selected' : ''; ?>>Shipped</option>
    <option  value="In Process" <?php echo ($order['status'] == 'inProcess') ? 'selected' : ''; ?>>In Process</option>
    <option  value="On Hold" <?php echo ($order['status'] == 'onHold') ? 'selected' : ''; ?>>On Hold</option>
    <option value="Disputed" <?php echo ($order['status'] == 'disputed') ? 'selected' : ''; ?>>Disputed</option>
	<option  value="Cancelled" <?php echo ($order['status'] == 'cancelled') ? 'selected' : ''; ?>>Cancelled</option>
    <option value="completed" <?php echo ($order['status'] == 'completed') ? 'selected' : ''; ?>>Completed</option>
</select>

    </br></br> Comments:
	<input type="text" name="comments" id="comments" value="<?php echo $order['comments']?>"> 

    </br></br> Customer Number:
   	<input type="text" name="customerNumber" id="customerNumber" readonly value="<?php echo $order['customerNumber']?>"> 

	
	</br></br>
    <button type="submit" name="Update" id="Update">Save</button>
	
	<?php if (isset($validation))
		echo $validation->listErrors() ?>
</form>
