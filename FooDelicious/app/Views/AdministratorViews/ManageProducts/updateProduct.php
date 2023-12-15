<!--open form as multipart because it will contain a file upload-->
<form action="<?php echo base_url();?>/UpdateProduct/<?= $product['produceCode'] ?>" method="post" enctype="multipart/form-data"> 
	</br></br> Produce Code:
   	<input type="text" name="produceCode" id="produceCode" readonly value="<?php echo $product['produceCode']?>"> 
	
	</br></br> Description:
	<input type="text" name="description" id="description" value="<?php echo $product['description']?>"> 
	
	</br></br> Category: 
	<input type="text" name="category" id="category" value="<?php echo $product['category']?>"> 
	
	</br></br> Supplier:
	<input type="text" name="supplier" id="supplier" value="<?php echo $product['supplier']?>"> 

    </br></br> Quantity in Stock:
	<input type="text" name="quantityInStock" id="quantityInStock" value="<?php echo $product['quantityInStock']?>"> 

    </br></br> Bulk Buy Price:
	<input type="text" name="bulkBuyPrice" id="bulkBuyPrice" value="<?php echo $product['bulkBuyPrice']?>"> 

    </br></br> Bulk Sale Price:
	<input type="text" name="bulkSalePrice" id="bulkSalePrice" value="<?php echo $product['bulkSalePrice']?>"> 
	
	</br></br> Image:
    <img src="<?php echo base_url(); ?>/assets/images/products/full/<?= $product['photo'] ?>"/>

        	
	</br></br> New Image Upload:
    <input type="file" id="file" name="file" value="<?= set_value('userFile') ?>">
	
	</br></br>
    <button type="submit" name="Update" id="Update">Update</button>
	
	<?php if (isset($validation))
		echo $validation->listErrors() ?>
</form>
