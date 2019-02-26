<?php
$sid = uniqid(time());

$style_template = <<<EOD
<style>
.header-menu-${sid} {
    background-color: #000;
}
</style>

EOD;

$html_template = <<<EOD
<div id="header-container">
    <div class="header-menu-${sid} pure-menu pure-menu-horizontal pure-menu-scrollable pure-menu-fixed">
        <a class="pure-menu-heading" href="#">{{ site_title }} </a>

        <ul class="pure-menu-list">
            <li class='pure-menu-item'><a href='#' class='pure-menu-link'>{{ menu1 }}</a></li>
            <li class='pure-menu-item'><a href='#' class='pure-menu-link'>{{ menu2 }}</a></li>
            <li class='pure-menu-item'><a href='#' class='pure-menu-link'>{{ menu3 }}</a></li>
        </ul>
    </div>
</div>

EOD;

echo $style_template;
echo $html_template;
?>
