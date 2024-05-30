<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="/images/C.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container1">
        <div class="left side">
            <div class="head">Built to<br>Showcase Portfolios</div>
            <div class="bdy">After creating an account in bitnest you should answer some questions about you then you will see a 2D game like view of your portfolio that you can showcase to your friends</div>
        </div>
        <div class="right side">
            <div class="top">
                <img class="logo" src="/images/bytnest.png"><br>
                <div class="fs">Sign in to <span class="log-title">BitNest</span></div><br>
            </div>
            <div class="bottom">
                <form action="login.php" methond="post">
                    <label>Username<br>
                        <input type="text" required>
                    </label><br>
                    <label>Password
                        <span class="fp">
                        <a href="#" id="f">Forget password?</a></span>
                        <br>
                        <input type="password" required>
                    </label>
                        <button class="btn btn-primary" id="btn"style="background-color:rgb(17, 90, 25);" type="Submit">Login</button>
                    <br>
                </form><br>
                <div class="p-3  bg-warning text-dark" id="ac">New to BitNest? <a href="#" id="ca">Create an account</a></div>
            </div>
        </div>
    </div>
</body>
</html>
