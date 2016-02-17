<!DOCTYPE html>
<html>
<head>
    <title>WordPress Tool Library</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <style>
        * { margin:0; padding:0; text-align:center; box-sizing:border-box;}
        .block { background: #fff; border-bottom: 1px solid #ddd; margin-top: 30px; }
        article { height: 250px; line-height: 250px; }
        a { text-decoration: none; color: #777; }
        h2 { font-size: 32px; }
    </style>
</head>
<body style="background-color: #f1f1f1;font-family:Arial; color:#888;">
    <div class="container">
        <h1 style="text-align:center; margin-top: 30px;">WordPress Theme Library</h1>
        <div class="row">
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-index.html"><h2>Menu</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-index.html"><h2>Slider</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-index.html"><h2>Posts</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-index.html"><h2>Page Navigation</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-post.html"><h2>Post</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-post.html"><h2>Comment</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-post.html"><h2>Widgets</h2></a></article></div>
            <div class="col-md-4"><article class="block"><a href="<?php echo get_template_directory_uri() ?>/demo/skeleton-index.html"><h2>Loading</h2></a></article></div>
        </div>
    </div>
    <footer id="footer">
        <div style="width: 33.33%">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
    </footer>
</body>
</html>