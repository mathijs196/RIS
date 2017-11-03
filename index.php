<?php
// start sessie
session_start();

include 'inc/db_connect.php';

//Set pagina titel
$page_title="Products";

include 'page/layout_nav.php';
 
// pagina header html
include 'page/layout_header.php';
 
// hier komt de content
 
// footer layout code
include 'page/layout_footer.php';
?>