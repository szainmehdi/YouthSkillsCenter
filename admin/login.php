<?php
require_once $cfg['root_dir'] . 'includes/global.inc.php';

session_start();

$cfg["page"] = "home";

//refresh session variables if logged in
if(isset($_SESSION['login'])) {
    echo "HELLO!";
    $server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
    header('HTTP/1.1 303 See Other');
    $next_page = "index.php";
    header('Location: http://' . $server_dir . $next_page);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>YSC Admin Log-In</title>

    <!-- Stylesheets -->
    <link href="<?php echo $cfg['base_dir']; ?>styles/main.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $cfg['base_dir']; ?>styles/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $cfg['base_dir']; ?>styles/fonts.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        input {
            text-align:center;
            width:260px;
            height:40px;
            border-radius: 4px;
            border: none;
            box-shadow: 0 0 2px #999;
            outline: none;
        }
        input:focus {
            box-shadow: 0 0 4px #ff0000;

        }
        input.block {
            display: block;
            margin: 10px auto;
        }
        #login_wrapper {
            width: 300px;
            min-height: 200px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: 200px;
            margin-left: -170px;

            border-radius: 8px;
            /*background-color: rgba(255,255,255,0.7);*/
            /*box-shadow: 0 0 10px #ddd;*/
        }
        #login_wrapper.loading {
            background-image: url(../images/ux/preloader_transparent.gif);
            background-repeat: no-repeat;
            background-position: center 80px;
            background-size: 48px;
        }
        #err {
            font-size: 14px;
            color: red;
            font-weight: bold;;
        }
        #err.loading {
            color: dimgray;
            padding: 60px;
            text-align: center;;
            margin-top: 20px;
        }
        label[for="rm"] {
            color: white;
            font-size:14px;
            font-family:Raleway, sans-serif;
            letter-spacing:1px;
            font-weight: normal;
            text-transform: none;
        }
        input[type="button"] {
            background-color: #ff0000;
            color: white;
            font-family: Raleway, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }
        input[type="button"]:hover {
            box-shadow: -2px 3px #ff947e;
        }
        input[type="button"]:active {
            background-color: #ff947e;
        }
        #login_title {
            margin: 0;
            padding: 0;
            text-transform: uppercase;
            font-size: 200%;
            color: rgba(0,0,0,0.6);
            text-shadow: 2px 2px 3px rgba(255,255,255,0.1);
            text-align: center;
        }
    </style>

    <!-- UPDATED 01/13/2013 06:55 pm -->
    <link rel="shortcut icon" href="<?php echo $cfg['base_dir']; ?>images/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $cfg['base_dir']; ?>images/icons/favicon.ico" type="image/x-icon">
    <meta charset=utf-8>
    <script src="<?php echo $cfg['base_dir']; ?>functions/js/jquery.min.js" type="text/javascript"></script>
    <script>

        $(function() {
            $("#login").click(function() {
                var email = $("#email").val();
                var pw = $("#pw").val();
                var $err = $("#err");
                var $fields = $("#login_fields");
                var $wrap = $("#login_wrapper");
                var t = false;

                $fields.fadeOut(250, function() {
                    $err.addClass("loading").html("Logging you in. Please wait...");
                    $wrap.addClass("loading");

                    $.post("<?php echo $cfg['base_dir']; ?>functions/php/login.func.php", { "email": email, "password": pw, "login": "true"  }, function(data) {
                        console.log(data);
                        $err.removeClass().html("");
                        $wrap.removeClass("loading");
                        if(data.search("Logged in successfully!")!=-1) {
                            location.reload();
                        }
                        else {
                            $fields.fadeIn(250, function() {
                                $("#err").html(data);
                            });
                        }
                    });
                });
            });
            $('input').keypress(function(e) {
                if(e.which == 13) {
                    jQuery(this).blur();
                    jQuery('#login').focus().click();
                }
            });
        });

    </script>

</head>
<body class="unstyled">
<div id="wrapper">

    <?php showHeader("admin",$cfg['page']); ?>

    <div id="content-wrap">
        <div id="content-inner-wrap">
            <div class="content-box top">
                <div id="large_banner_test_01" class="banner_image" style="height: 800px;background-image: url(<?php echo $cfg['base_dir']; ?>images/backgrounds/Depositphotos_2769334_web.jpg);">
                    <div class="banner_content">
                        <div id="login_wrapper">
                            <h6 id="login_title">Log In</h6>
                            <div id='login_fields'>
                                <input class="block" type="text" name="email" id="email" placeholder="Email" />
                                <input class="block" type="password" name="password" placeholder="Password" id="pw" />
                                <input class="block" type="button" value="Log In" name="login"  id="login" />
                            </div>
                            <div id="err"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once($cfg['root_dir']. 'includes/footer.inc.php'); ?>

        </div>
    </div>
</div>
</body>
</html>
