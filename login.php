<?php
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>RealTime ChatApplication</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="enter your email">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="enter new password">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Not signed up yet? <a href="index.php">Sign up</a></div>
        </section>
    </div>
    <script src="./javascript/password.js"></script>
    <script src="./javascript/login.js"></script>
</body>
</html>