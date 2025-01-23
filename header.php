<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); // Nezbytné volání pro správné fungování WordPressu ?>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="contact_1">
                <span><i class="fa-solid fa-phone"></i><a href="tel:+420721236120">&nbsp;(+420)&nbsp;721 236 120</a></span>
                <span><i class="fa-solid fa-envelope"></i><a href="mailto:jasanika@email.cz">&nbsp;jasanika@email.cz</a></span>
            </div>

            <div class="contact_2">
                <span><i class="fa-brands fa-square-facebook"></i><a href="#"></a></span>
                <span><i class="fa-brands fa-square-pinterest"></i><a href="#"></a></span>
                <span><i class="fa-brands fa-square-instagram"></i><a href="#"></a></span>
                <span><i class="fa-brands fa-square-youtube"></i><a href="#"></a></span>
            </div>
        </div>

        <hr>
        
        <div class="container">
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
            </div>
        </div>
    </div>
</body>
</html>