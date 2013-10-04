<?php
require_once $cfg['root_dir'] . 'includes/global.inc.php';
require_once $cfg['root_dir'] . 'includes/login.inc.php';
$cfg["page"] = "home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home | Youth Skills Center</title>

    <!-- Stylesheets -->
    <link href="<?php echo $cfg['base_dir']; ?>styles/main.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $cfg['base_dir']; ?>styles/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $cfg['base_dir']; ?>styles/fonts.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $cfg['base_dir']; ?>styles/admin.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

    </style>

    <!-- UPDATED 01/13/2013 06:55 pm -->
    <link rel="shortcut icon" href="<?php echo $cfg['base_dir']; ?>images/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $cfg['base_dir']; ?>images/icons/favicon.ico" type="image/x-icon">
    <meta charset=utf-8>
    <script src="<?php echo $cfg['base_dir']; ?>functions/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $cfg['base_dir']; ?>functions/js/admin.functions.js" type="text/javascript"></script>
    <script>

        $(function() {

        });

    </script>

</head>
<body class="unstyled">
<div id="wrapper">

    <?php showHeader("admin",$cfg['page'], $user_current); ?>

    <div id="content-wrap">
        <div id="content-inner-wrap">
            <div class="content-box top">
                <div id="large_banner_test_01" class="banner_image" style="height: 300px;background-image: url(<?php echo $cfg['base_dir']; ?>images/banners/events/halloween.jpg);">
                    <div class="banner_content">
                        <h1 style="background-color: rgba(255,61,0,0.83);color: white;margin-top: 40px;">
                            Logged In Successfully
                        </h1>
                        <p style="margin-left: 40px;">
                            You've successfully logged in to the Youth Skills Center Admin CMS as <strong><?php echo $user_current->name; ?></strong>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-box">
                <div id="large_banner_test_01" class="banner_image" style="height: 400px;background-image: url(<?php echo $cfg['base_dir']; ?>images/banners/child-hands_large.jpg);
                        background-position: 150px -200px;">
                    <div class="banner_content">
                        <h1 style="background-color: rgba(255,8,123,0.84);color: white;margin-top: 120px;">
                            Share those precious moments.
                        </h1>
                        <p>
                            View, edit, rearrange, tag, and upload photos for the Youth Skills Center Photo Gallery.
                        </p>
                        <div class="action_button">
                            <div class="icon"></div>
                            Manage Photos
                            <a href="photos.php"><span class="full-box-link"></span></a>
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
