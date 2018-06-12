<?php
/**
 * The header for the OnePress theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="theme-color" content="#dd0202">
    <meta name="nosnippets">
    <meta property='og:title' content='Eduardo Rocha - Programador Front-End - Umuarama - PR'/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Sou Eduardo Rocha, Programador Front-End e Back-End na região de Umuarama - PR. Atualmente trabalho com Técnologias HTML 5, CSS 3, JavaScript e CakePHP 3.5."/>
    <meta name="keywords" content="Programador, Front-End, Back-End, Umuarama-PR, HTML 5, CSS 3, JavaScript, CakePHP, Developer, Programmer"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no"/>
    <meta name="author" content="Eduardo Rocha"/>
    <meta name="web_author" content="Eduardo Rocha"/>
    <meta name="copyright" content="© Eduardo Rocha"/>
    <meta name="robots" content="index,follow"/>
    <meta name="rating" content="general"/>
    <meta name="distribution" content="global">
</head>

<body <?php body_class(); ?>>
<?php do_action('onepress_before_site_start'); ?>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'onepress'); ?></a>
    <?php
    /**
     * Hooked: onepress_site_header
     *
     * @see onepress_site_header
     */
    do_action('onepress_site_start');
    ?>
