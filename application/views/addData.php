<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Data</title>
</head>

<body>
    <div class="container py-4">
        <h1 class="text-center">Add Product</h1>

        <form action="<?php echo base_url() . 'add' ?>" method="post">
            <div class="row">
                <div class="offset-3 col-lg-6  offset-3">
                    <label for="Mobile">Choose Mobile Category</label>
                    <select class="form-control" name="category">
                        <option value="Mobile" <?php echo set_select('category', 'Mobile', $post['category'] === 'Mobile'); ?>>Mobile</option>
                        <option value="Cooking" <?php echo set_select('category', 'Cooking', $post['category'] === 'Cooking'); ?>>Cooking</option>
                        <option value="Cloth" <?php echo set_select('category', 'Cloth', $post['category'] === 'Cloth'); ?>>Cloth</option>
                        <option value="Machines" <?php echo set_select('category', 'Machines', $post['category'] === 'Machines'); ?>>Machines</option>
                        <option value="Laptop" <?php echo set_select('category', 'Laptop', $post['category'] === 'Laptop'); ?>>Laptop</option>
                    </select>

                    <div>
                        <?php if (isset($_POST['catogery'])) { ?>
                            <?php echo form_error('catogery', '<div class="text-danger">', '</div>'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" offset-3 col-lg-6  offset-3">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter product name"
                        value="<?php echo set_value('name', $post['name']); ?>">
                    <div>
                        <?php if (isset($_POST['name'])) { ?>
                            <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="offset-3 col-lg-6  offset-3">
                    <label for="cost">Cost</label>
                    <input type="number" class="form-control" name="cost" placeholder="Enter product cost"
                        value="<?php echo set_value('cost', $post['cost']); ?>">
                    <div>
                        <?php if (isset($_POST['cost'])) { ?>
                            <?php echo form_error('cost', '<div class="text-danger">', '</div>'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="offset-3 col-lg-6  offset-3">
                    <label for="product price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter product sale price"
                        value="<?php echo set_value('price', $post['price']); ?>">
                    <div>
                        <?php if (isset($_POST['price'])) { ?>
                            <?php echo form_error('price', '<div class="text-danger">', '</div>'); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="offset-3 col-lg-6  offset-3">
                    <label for="cars">Status</label>
                    <select name="status" class="form-control">
                        <option value="" selected>Select One</option>
                        <option value="unpaid" <?php echo set_select('category', 'unpaid', $selectedCategory === 'unpaid'); ?>>Unpaid</option>
                        <option value="paid" <?php echo set_select('category', 'paid', $selectedCategory === 'paid'); ?>>
                            Paid</option>

                    </select>
                    <div>
                        <?php if (isset($_POST['status'])) { ?>
                            <?php echo form_error('status', '<div class="text-danger">', '</div>'); ?>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="offset-3 col-lg-6  offset-3 mt-3 ">
                <button type="submit" class="btn btn-primary">ADD</button>
                <!-- <button type="submit" class="btn btn-primary ">Submit</button> -->
            </div>
        </form>
    </div>
</body>

</html>
<?php include('footer.php'); ?>