<?php
    include('./dbconnect.php');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SD Library Dashboard</title>
        <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    </head>
    <body class="bg-info">
        <?php
            if(isset($_SESSION['un'])){
                ?>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand text-dark fw-bold" href="./home.php">SD Library Dashboard</a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-link text-danger fw-bold"><?php echo $_SESSION['un']; ?></li>
                            <li><a class="nav-link fw-bold" href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </nav>
        <?php
            }else{
            ?>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand text-dark fw-bold" href="./index.php">SD Library</a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="nav-link fw-bold" href="login.php">Log In</a></li>
                        </ul>
                    </div>
                </nav>
            <?php
            }
        ?>

    </body>
</html>
