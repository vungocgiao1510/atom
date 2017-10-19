
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/gcms/css/bootstrap.min.css">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/gcms/css/style.default.css" id="theme-stylesheet">
        <!-- jQuery Circle-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/gcms/css/grasp_mobile_progress_circle-1.0.0.min.css">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/gcms/css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>public/gcms/img/favicon.ico">
        <!-- Font Awesome CDN-->
        <!-- you can replace it by local Font Awesome-->
        <script src="https://use.fontawesome.com/99347ac47f.js"></script>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <div class="page login-page">
            <div class="container">
                <div class="form-outer text-center d-flex align-items-center">
                    <div class="form-inner">
                        <div class="logo text-uppercase"><span>Atom</span><strong class="text-primary">Gcms</strong></div>
                        <p>Xin chào các bạn đã đến với trang quản trị đăng nhập vào hệ thống Atom GCMS được xây dựng bởi Giao Vũ.</p>
                        <?php 
                        if($error != ""){
                            echo $error;
                        }
                        ?>
                        <form id="login-form" method="post" action="">
                            <div class="form-group">
                                <label for="login-username" class="label-custom">Tên đăng nhập</label>
                                <input id="login-username" name="username" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="login-password" name="password" class="label-custom">Mật khẩu</label>
                                <input id="login-password" type="password" name="password" required="">
                            </div><input type="submit" id="login" class="btn btn-primary" value="Đăng nhập" name="ok">
                            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </form><a href="#" class="forgot-pass">Bạn quên mật khẩu?</a><small>Bạn chưa có tài khoản? </small><a href="register.html" class="signup">Liên hệ để đăng ký</a>
                    </div>
                    <div class="copyrights text-center">
                        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/tether.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/jquery.cookie.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>public/gcms/js/front.js"></script>
    </body>
</html>