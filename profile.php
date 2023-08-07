<?php 
    SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Monomaniac+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <div class="navbar">

            <h1 id="logo">FASHION</h1>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pembelian.php">Pembelian</a></li>
                <li><a href="histori.php">History</a></li>
            </ul>

            <div class="profile">
            <a href="profile.png"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a>
            </div>
        </div>
    </nav>

    <div class="container1">
        <h1 id="title">Hallo, <?php echo $_SESSION['user_aktif']; ?></h1>

        <button id="logout"><a href="logout.php">Logout</a></button>
    </div>

    <br><br><div class="container2">
    <table class="table table-bordered">
        <tr>
            <td>Email</td>
            <td>Password</td>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_user");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td>
                <a href="edit_profile.php?id_user=<?php echo $d['id_user'];?>"
                   class="btn btn-outline-primary">Edit</a>
            </td>
        </tr>
        <?php 
        }
        ?>
        </table>
    </div>


    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>

</body>
</html>