<html>
<head>
    <!-- Hier staan je eigen links en meta tags -->
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_footer(); ?>
</body>
</html>

<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>