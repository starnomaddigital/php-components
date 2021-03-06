<?php
$sid = uniqid(time());

$style_template = <<<EOD
<style>
@media only screen and (max-width : 767px) {
    .parallax-${sid} {
        margin-top: 43px;
        height: 500px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

}

/* Larger screen */
@media only screen and (min-width : 768px) {
    .parallax-${sid} {
        height: 500px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
}

.splash-header-${sid} {
    font-family: Georgia;
    font-size: 40pt;
    font-variant: small-caps;
    color: #aaa;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    position: absolute;
    top: 100px; left: 0; right: 0; bottom: 0;
    text-align: center;
}
</style>

EOD;

$parallax_template = <<<EOD
<div id="splash-containter" class="parallax-${sid}" style="background-image: url('{{ parallax_image }}');">
    <h1 class="splash-header-${sid}">{{ site_title }}</h1>
</div>

EOD;

echo $style_template;
echo $parallax_template;
