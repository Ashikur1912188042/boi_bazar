
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <!-- Bootsrap CSS Link -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <!-- Font Awesome Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
            <style>
                .admin-image{
                    width: 100px;
                    object-fit: contain;
                }
            </style>
</head>
<body>
    <!-- First child -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
            <div class="container-fluid">
                <img src="../images/logo-no-background.png" alt="" class="logo">
                <nav class="navbar navbar-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link"><h4>Welcome Guest</h4></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- Second child -->
    <div class="bg-light">
        <h3 class="text-center p-2 ">Manage Details</h3>
    </div>
    <!-- Third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5">
                <a href=""><img src="../images/ashik.jpg" alt="" class="admin-image"></a>
                <p class="text-light text-center ">Ashik</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-center text-light bg-info my-1">Insert Products</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-center text-light bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-center text-light bg-info my-1">Insert Publisher</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">List of Users</a></button>
                <button><a href="" class="nav-link text-center text-light bg-info my-1">Logout</a></button>
            </div>

        </div>
    </div>



    <!-- Fourth child-->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category']))
                include('insert-categories.php');
        ?>
        <?php
        if(isset($_GET['insert_brand']))
                include('insert-brands.php');
        ?>
    </div>



    <!-- Last child-->
    <div class="bg-info p-3 text-center">
                <p>All right reserved to Boi Bazar - Developed by Md Ashikur Rahman</p>

            </div>






    <!-- Bootsrap Js Link -->
    <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
</body>
</html>