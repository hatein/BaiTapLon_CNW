<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/modal.css">

</head>

<body>
    <div class="container">
        <div class="box_main">

            <div class="box_1">
                <img src="./assets/img/fb_logo.svg" alt="logo" srcset="">
                <span class="slogan">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</span>
            </div>
            <div class="box_2">
                <div class="box_2_main">
                    <form class="form" action="" method="post">
                        <input type="email" placeholder="Email" name="username">
                        <input type="text" placeholder="Mật khẩu" name="password">
                        <button type="submit">Đăng nhập</button>
                        <a href="">Quên mật khẩu?</a>
                    </form>
                    <button class="new_acc" id="toogle_modal" type="button">Tạo tài khoản mới</button>
                </div>

            </div>
        </div>

        <?php
        include './partials/modal-signup.php';
        ?>
    </div>

    <?php
    include './partials/footer.php';
    ?>

    <script src="./javascript/modal.js"></script>
</body>

</html>