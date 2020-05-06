<?php
require "required/html_config.php";
require "ui_Elements/element_Nav.php";
generateNavigation();

$html .= generateNavigation();
echo $html;

require "ui_Elements/footer.php";
?>