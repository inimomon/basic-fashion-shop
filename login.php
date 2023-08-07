<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&family=Lilita+One&family=Nunito:wght@900&family=PT+Sans+Narrow:wght@700&family=Quicksand:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">        

        <div class="link">

            <div class="signup">
                <a href="index.php" id="sg"><i class="fa-solid fa-user"></i></a>
            </div>
            <div class="login">
                <a href="login.php" id="lg"><i class="fa-solid fa-lock"></i></a>
            </div>

        </div>

        <center><h2 id="title">LOGIN</h2></center>

        <div class="form">
            <form action="cek_login.php" method="POST">
                <h3 id="label2">Alamat Email</label>           
                <input type="text" name="email_user" placeholder="Email" id="iniemail">     

                <h3 id="label3">Password</label>
                <input type="password" name="password_user" placeholder="Password" id="inipassword">

                <br><br><br>
                <input type="submit" id="tombol">
            </form>
        </div>

        <h3 id="error">
            <?php 
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "wrongpw") {
                        echo "Password salah!";
                    }
                }
            ?>
        </h3>

    </div>

    
    

    <script src="https://kit.fontawesome.com/bda1c57842.js" crossorigin="anonymous"></script>
</body>
</html>