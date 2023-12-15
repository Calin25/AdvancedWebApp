<form> 
	</br></br> Produce Code: 
	<input type="text" name="produceCode" id="produceCode" readonly value="<?php echo $product['produceCode']?>"> 

	</br></br> Description: 
	<input type="text" name="description" id="description" readonly value="<?php echo $product['description']?>"> 

	</br></br> Category: 
	<input type="text" name="category" id="category" readonly value="<?php echo $product['category']?>"> 

	</br></br> Supplier: 
	<input type="text" name="supplier" id="supplier" readonly value="<?php echo $product['supplier']?>"> 

	</br></br> Quantity in Stock: 
	<input type="text" name="quantityInStock" id="quantityInStock" readonly value="<?php echo $product['quantityInStock']?>"> 

	</br></br> Bulk Buy Price: 
	<input type="text" name="bulkBuyPrice" id="bulkBuyPrice" readonly value="<?php echo $product['bulkBuyPrice']?>"> 

    </br></br> Bulk Sale Price: 
	<input type="text" name="bulkSalePrice" id="bulkSalePrice" readonly value="<?php echo $product['bulkSalePrice']?>"> 

	</br></br> Photo: <img src="<?php echo base_url(); ?>/assets/images/products/full/<?= $product['photo'] ?>"/> 

	<br>
	<button>
        <a href="<?php echo base_url(); ?>" 
           onclick="return confirm('Are you sure you want to place this order');">
           Place Order
        </a>
    </button>
	<button>
        <a href="<?php echo base_url('removeFromBasket/'.$product['produceCode']); ?>" 
           onclick="return confirm('Are you sure you want to remove this item from your basket');">
           Remove From Basket
        </a>
    </button>
    
</td>

</form>

