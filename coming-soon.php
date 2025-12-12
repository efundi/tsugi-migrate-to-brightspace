<?php
require_once('../config.php');
include 'src/Template.php';

use \Tsugi\Core\LTIX;

// Retrieve the launch data if present
$LAUNCH = LTIX::requireData();

$menu = false; // We are not using a menu

// Start of the output
$OUTPUT->header();

$context = [
    'styles'     => [ addSession('static/css/app.min.css'), ],
];

Template::view('templates/header.html', $context);

$OUTPUT->bodyStart();

$OUTPUT->topNav($menu);
?>
<div class="bgnew"></div>
<?php
$OUTPUT->splashPage(
    "<img src='static/img/efundi.svg' alt='eFundi'/><i class='fas fa-arrow-right'></i><img src='static/img/brightspace_woodmark.svg' alt='Brightspace'/>",
    __("<h2>Convert your site to Brightspace - Coming Soon!<h2>")
);

$OUTPUT->footerStart();

$OUTPUT->footerEnd();
