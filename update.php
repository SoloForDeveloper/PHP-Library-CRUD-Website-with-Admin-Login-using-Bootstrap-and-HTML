<?php include('./navbar.php'); ?>

<form action="./script.php" method="post" class="m-5">
    <h1 class="text-center">Update Book Details</h1>
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM book WHERE id='$id'";
        $res= mysqli_query($con, $sql);

        if(mysqli_num_rows($res)>0){
            $row=mysqli_fetch_assoc($res);
            ?>
            <div class="form-group">
                <label class="form-label fw-bold">Book Id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" readonly>
            </div>

            <div class="form-group">
                <label class="form-label fw-bold">Book Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-group">
                <label class="form-label fw-bold">Category</label>
                <input type="text" name="category" class="form-control" value="<?php echo $row['category']; ?>" >
            </div>

            <div class="form-group">
                <label class="form-label fw-bold">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $row['author']; ?>" >
            </div>

            <input type="submit" name="update"value="Update Book" class="btn btn-warning mt-3">
            <a href="./home.php" class="btn btn-secondary mt-3">Back to Home</a>

        <?php
        }
        ?>
</form>

<?php include('./footer.php'); ?>