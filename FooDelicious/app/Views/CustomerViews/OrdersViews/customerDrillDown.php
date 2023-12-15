<form> 
	</br></br> Order Number: 
	<input type="text" name="orderNumber" id="orderNumber" readonly value="<?php echo $product['orderNumber']?>"> 

	</br></br> Order Date: 
	<input type="text" name="orderDate" id="orderDate" readonly value="<?php echo $product['orderDate']?>"> 

	</br></br> Required Date: 
	<input type="text" name="requiredDate" id="requiredDate" readonly value="<?php echo $product['requiredDate']?>"> 

	</br></br> Shipped Date: 
	<input type="text" name="shippedDate" id="shippedDate" readonly value="<?php echo $product['shippedDate']?>"> 

	</br></br> Status: 
	<input type="text" name="status" id="status" readonly value="<?php echo $product['status']?>"> 

	</br></br> Comments: 
	<input type="text" name="comments" id="comments" readonly value="<?php echo $product['comments']?>"> 
    </br></br> Customer Number: 
	<input type="text" name="customerNumber" id="customerNumber" readonly value="<?php echo $product['customerNumber']?>"> 

	<br>
	<br>
    <td><button><a href="<?php echo base_url('AmendOrder/'.$product['orderNumber']); ?>" 
				onclick="return checkDelete();">Amend Order </a></button></td>


	
</form>

