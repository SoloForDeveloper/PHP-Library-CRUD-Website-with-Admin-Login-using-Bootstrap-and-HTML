<?php include('./navbar.php'); ?>
    <?php
        if(!isset($_SESSION['un'])){
            header('location:index.php');
        }
    ?>
    <form action="./script.php" method="post">
        <h1 class="m-5">Book Details</h1>

        <a href="./insert.php" class="btn btn-primary mx-3">Add Book</a>

        <?php
            $sql = "SELECT * FROM book";
            $res = mysqli_query($con, $sql) or die(mysqli_error($con));

            if(mysqli_num_rows($res)>0){
                ?>
                <table class="table table-stripped m-3">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Book Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['category']."</td>";
                                echo "<td>".$row['author']."</td>";
                                echo "<td>";
                                echo "<a href='./update.php?id=$id' class='btn btn-warning btn-sm'>Update</a>";
                                echo "<a href='./delete.php?id=$id' class='btn btn-danger btn-sm m-1'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <?php
            }
            ?>
    </form>

<?php include('./footer.php'); ?>