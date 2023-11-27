<br><br><br>
<!-- open form as multipart because it will contain a file upload -->

<form action="<?php echo base_url();?>/insertProduct" method="post" enctype="multipart/form-data">
</br></br> 
<label for="produceCode">Produce Code:</label>
<input type="text" name="produceCode" id="produceCode"  value="<?php echo set_value('produceCode')?>">

</br></br> 
<label for="description">Description:</label>
<input type="text" name="description" id="description"  value="<?php echo set_value('description')?>">

</br></br> 
<label for="category">Category:</label>
<select name="category" id="category">
    <option value="Baked Goods" <?php echo set_select('category', 'Baked Goods'); ?>>Baked Goods</option>
    <option value="Eggs & Dairy" <?php echo set_select('category', 'Eggs & Dairy'); ?>>Eggs & Dairy</option>
    <option value="Exotic Fruit" <?php echo set_select('category', 'Exotic Fruit'); ?>>Exotic Fruit</option>
    <option value="Fruit" <?php echo set_select('category', 'Fruit'); ?>>Fruit</option>
    <option value="Jams and Preserves" <?php echo set_select('category', 'Jams and Preserves'); ?>>Jams and Preserves</option>
    <option value="Salads" <?php echo set_select('category', 'Salads'); ?>>Salads</option>
    <option value="Vegetables" <?php echo set_select('category', 'Vegetables'); ?>>Vegetables</option>
</select>

</br></br>
<label for="supplier">Supplier:</label>
    <input type="text" name="supplier" id="supplier" value="<?php echo set_value('supplier')?>">

</br></br> 
<label for="quantityInStock">Quantity in Stock:</label>
    <input type="text" name="quantityInStock" id="quantityInStock" value="<?php echo set_value('quantityInStock')?>">

</br></br> 
<label for="bulkBuyPrice">Bulk Buy Price:</label>
    <input type="text" name="bulkBuyPrice" id="bulkBuyPrice" value="<?php echo set_value('bulkBuyPrice')?>">

</br></br>
<label for="bulkSalePrice">Bulk Sale Price:</label>
    <input type="text" name="bulkSalePrice" id="bulkSalePrice" value="<?php echo set_value('bulkSalePrice')?>">

</br></br>
<label for="file">Image Upload:</label>
    <input type="file" id="file" name="file" value="<?= set_value('userFile') ?>">

	</br></br>
	<button type="submit" name="Insert" id="Insert">Insert</button>

    <button type="submit"><a href="javascript:history.back()" class="back-button">Back</a></button>

	<?php if (isset($validation))
		echo $validation->listErrors() ?>
</form>
