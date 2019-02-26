<?php
$sid = uniqid(time());
$year = date("Y");

$style_template = <<<EOD
<style>
.highlight-${sid} {
    background-color: black;
}

.highlight-${sid} p {
    color: grey;
}

.large-cell-${sid} {
    padding: 8px 12px;
}
</style>

EOD;

$html_template = <<<EOD
<div id="footer-container">
    <div class="highlight-${sid}">
        <p class="large-cell-${sid}">&copy {{ brand }} ${year}</p>
    </div>
</div>

EOD;

echo $style_template;
echo $html_template;
