
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Diary</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Login</a></li>
            <li><a href="register.htm">Register</a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <h1>Login <?php echo $u->type; ?></h1>
    <form class="col s6 offset-s3" method="post" action="login.php">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Username" id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
            </div>
        </div>
        <button class="waves-effect waves-light btn">Login</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>