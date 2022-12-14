<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../public/assets/login.css">
</head>
<body>

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form action="<?= OOP\App\Core\Router::url('ceklogin') ?>" method="POST">
                        <div class="inputBox">
                            <input type="text" name="username" placeholder="username">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                       <p class="forget">Forget Password ? <a href="">Click Here</a></p>
                       <p class="forget">Don't have an account ? <a href="">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>