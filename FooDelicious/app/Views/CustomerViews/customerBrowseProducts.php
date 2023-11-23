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
    <th align="center ">Produce Code</th>
    <th align="center ">Description</th>
    <th align="center ">Category</th>
    <th align="center ">Supplier</th>
    <th align="center ">Quantity</th>
    <th align="center ">Bulk Buy Price</th>
    <th align="center ">Bulk Sale Price</th>
    <th align="center ">Image</th>
</tr>
<?php foreach($produceCode as $row){?>
    <tr>
    <td><?php echo $row['produceCode'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['category'];?></td>
    <td><?php echo $row['supplier'];?></td><br><br><br><br>

<div class="BrowseProductsContainer">
  <div class="row row-cols-1 row-cols-md-3 g-5">
  <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/suppliers/OrganicMeelick.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Add new Product</h6>
          <p class="card-text">Add new Products</p>
          <a href="<?= base_url() ?>" class="btn btn-primary">Add New Products</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/sourdough.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Baked Goods</h6>
          <p class="card-text">Savor the Artistry</p>
          <a href="<?= base_url('ListOfBakedGoods') ?>" class="btn btn-primary">View Baked Goods</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/eggs.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Eggs & Dairy</h6>
          <p class="card-text">Free Range Eggs</p>
          <a href="<?= base_url('ListOfEggsDairyView') ?>" class="btn btn-primary">View Eggs & Dairy Products</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/exotic.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Exotic Fruits</h6>
          <p class="card-text">World Wide Fruits</p>
          <a href="<?= base_url('ListOfExoticFruits') ?>" class="btn btn-primary">View Exotic Fruits</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/tomatos.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Salads</h6>
          <p class="card-text">Fresh Local Salad</p>
          <a href="<?= base_url('ListOfSalads') ?>" class="btn btn-primary">View Fresh Salad</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/jam.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Jams & Preserves</h6>
          <p class="card-text">Jam Bam</p>
          <a href="<?= base_url('ListOfJams') ?>" class="btn btn-primary">View Jams & Preserves</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/carrots.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">Fresh Vegetables</h6>
          <p class="card-text">Fresh Vegetables</p>
          <a href="<?= base_url('ListOfVeg') ?>" class="btn btn-primary">View Vegetables</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center card-sm">
        <img src="<?= base_url('assets/images/products/full/brioche.jpg') ?>" alt="Supplier Image">
        <div class="card-body">
          <h6 class="card-title">All Products</h6>
          <p class="card-text">View All Products</p>
          <a href="<?= base_url('ListAllProducts') ?>" class="btn btn-primary">View All Products</a>
        </div>
      </div>
    </div>
  </div>
</div>

    <td><?php echo $row['bulkSalePrice'];?></td>
    <td><?php echo $row['photo'];?></td>
    
    <td><img src="<?php echo base_url(); ?>/assets/images/products/thumbs/<?=
    $row['photo'] ?>"/>
             <td><a href="<?php echo base_url('drillDownProducts/'.$row['produceCode']); ?>"> <button>View Product</button></a></td>

     
    </tr>

<?php }?>
</table>

<div class="d-flex justify-content-center">
        <?php if ($pager)
        echo $pager->links();
        ?>
</div>