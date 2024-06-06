<?php include('./navbar.php'); ?>

<form action="./script.php" method="post" class="m-5">
    <h1 class="text-center">Add New Book</h1>

    <div class="form-group">
        <label class="form-label fw-bold">Book Name</label>
        <input type="text" name="title" placeholder="Enter book name.." class="form-control" required autocomplete="off">
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Category</label>
        <input type="text" name="category" placeholder="Enter book category.." class="form-control" required autocomplete="off">
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Author</label>
        <input type="text" name="author" placeholder="Enter author name.." class="form-control" required autocomplete="off">
    </div>

    <input type="submit" name="insert" value="Add Book" class="btn btn-primary mt-3">
    <a href="./home.php" class="btn btn-secondary mt-3">Back to Home</a>
</form>

<?php include('./footer.php'); ?>