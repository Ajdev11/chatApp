<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>RealTime ChatApplication</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field">
                        <label for="">Email</label>
                        <input type="text" placeholder="enter your email">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" placeholder="enter new password">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Not signed up yet? <a href="#">Login</a></div>
        </section>
    </div>
    <script src="./javascript/password.js"></script>
</body>
</html>