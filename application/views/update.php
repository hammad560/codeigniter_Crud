<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update data</title>
</head>

<body>
    <div class="container py-4">
        <h1 class="text-center">Update Product</h1>
     <form action="<?php echo base_url().'updateproduct/'.$singleproduct->id?>" method="post">
        <div class="row">
            <div class="offset-3 col-lg-6  offset-3">
                <label for="Mobile" >Chose Mobile Catogery</label>
                <select   class="form-control" name="catogery" value="<?php echo $singleproduct->category; ?>">
                    <option value="" selected>Select One</option>
                    <option value="Mobile" <?php echo set_select('catogery', 'mobile', $selectedCategory === 'mobile'); ?>>Mobile</option>
                    <option value="Cooking" <?php echo set_select('catogery', 'Cooking', $selectedCategory === 'Cooking'); ?>>Cooking</option>
                    <option value="Cloth" <?php echo set_select('catogery', 'Cloth', $selectedCategory === 'Cloth'); ?>>Cloth</option>
                    <option value="Mechines" <?php echo set_select('catogery', 'Mechines', $selectedCategory === 'Mechines'); ?>>Mechines</option>
                    <option value="Smartphones" <?php echo set_select('catogery', 'Smartphones', $selectedCategory === 'Smartphones'); ?>>Laptop</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class=" offset-3 col-lg-6  offset-3">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter product name" value="<?php  echo $singleproduct->name; ?>">
            </div>

            <div class="offset-3 col-lg-6  offset-3">
                <label for="cost">Cost</label>
                <input type="number" class="form-control" name="cost" placeholder="Enter product cost" value="<?php echo $singleproduct->cost; ?>">
            </div>
            <div class="offset-3 col-lg-6  offset-3">
                <label for="product price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter product sale price" value="<?php  echo $singleproduct->price; ?>">
            </div>

            <div class="offset-3 col-lg-6  offset-3">
                <label for="cars">Status</label>
                <select name="status"  class="form-control" value="<?php  echo $singleproduct->status; ?>" >
                    <option value="unpaid" selected>Unpaid</option>
                    <option value="paid">Paid</option>

                </select>
            </div>
            
        </div>
        <div class="offset-3 col-lg-6  offset-3 mt-3 ">
        <input type="submit" name="insert" value="Submit" class="btn btn-primary ms-2">
        </div>
</form>




<div class="float-end">
<?php  echo validation_errors(); ?>
</div>
    </div>
</body>

</html>
<?php include('footer.php'); ?>