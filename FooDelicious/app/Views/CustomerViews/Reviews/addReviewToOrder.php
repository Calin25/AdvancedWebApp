<br><br><br>

<form action="<?= base_url('AddReview/' . $productCode); ?>" method="post" enctype="multipart/form-data">


</br></br> 
<label for="productCode">Product Code:</label>
    <input type="text" name="productCode" id="productCode" readonly value="<?= $productCode; ?>">

<label for="customerReview">Write Your Review:</label>
<input type="text-box" name="customerReview" id="customerReview"  value="<?php echo set_value('customerReview')?>">

</br></br> 
<label for="stars">How Many Stars:</label>
<select name="stars" id="stars">
    <option value="1" <?php echo set_select('stars', '*'); ?>>1 Star</option>
    <option value="2" <?php echo set_select('stars', '**'); ?>>2 Stars</option>
    <option value="3" <?php echo set_select('stars', '***'); ?>>3 Stars</option>
    <option value="4" <?php echo set_select('stars', '****'); ?>>4 Stars</option>
    <option value="5" <?php echo set_select('stars', '*****'); ?>>5 Stars</option>
</select>

</br></br>
<label for="date">Date:</label>
<input type="date" name="date" id="date" readonly value="<?php echo date('Y-m-d'); ?>">

</br></br> 

	</br></br>
	<button type="submit" name="Insert" id="Insert">Insert</button>

    <button type="submit"><a href="javascript:history.back()" class="back-button">Back</a></button>

	<?php if (isset($validation))
		echo $validation->listErrors() ?>
</form>


