<?php  include('header.php');?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container mt-5">
    <a href="<?php echo base_url().'addForm';?>" class="btn btn-primary mb-5" >Add Product</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Product Name</th>
      <th scope="col">Cost</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <?php   foreach($pro as $product): ?>
        <td><?php  echo  $product->category?></td>        
        <td><?php  echo  $product->name?></td>
        <td><?php  echo $product->cost?></td>
        <td><?php  echo $product->price?></td>
        <td><?php  echo $product->status?></td>
        <td>          
        <a href="<?php echo base_url().'editdata/'?><?php echo $product->id?>" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url().'deletedata/'?><?php echo $product->id?>" class="btn btn-danger">Delete</a>
        </td>              
    </tr>
    <?php  endforeach; ?>
  </tbody>
</table>
</div>


<?php include('footer.php');?>
