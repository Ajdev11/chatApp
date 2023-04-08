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
        <section class="form signup">
            <header>RealTime ChatApplication</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field">
                        <label for="">Firstname</label>
                        <input type="text" name="fname" placeholder="enter firstname" required>
                    </div>
                    <div class="field">
                        <label for="">Lastname</label>
                        <input type="text" name="lname" placeholder="enter lastname" required>
                    </div>
                    </div>
                    <div class="field">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="enter your email" required>
                    </div>
                    <div class="field">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="enter new password" required>
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Not signed up yet? <a href="#">Login</a></div>
        </section>
    </div>
    <script src="./javascript/password.js"></script>
    <script src="./javascript/signup.js"></script>
</body>
</html>