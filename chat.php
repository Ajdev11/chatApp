<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location:login.php");
}
?>

<?php
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="dp.jpg" alt="">
                    <div class="details">
                        <span>Aj Devs</span>
                        <p>Active Now</p>
                    </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="dp.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="dp.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="dp.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, animi?</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" placeholder="start chat" class="typing-area">
                <button><i class="fab  fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>
</html>