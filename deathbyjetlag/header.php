<?php
/* Header
Creates the outer-top of the HMTL document. Begins the <body> tag and sets any top-level info. */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( 'template-parts/header/site-header' ); ?>
	<main id="main" class="layout">