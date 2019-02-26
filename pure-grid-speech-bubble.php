<?php
$sid = uniqid(time());

$style_template = <<<EOD
<style>
.highlight-${sid} {
    background-color: #aaa;
}

.highlight-2-${sid} {
    background-color: #eee;
}

.img-container-${sid} {
    padding: 10px;
    text-align: center;
}
    
.thumbnail-${sid} {
    width: 160px;
    height: auto;
    border-radius: 50%;
    vertical-align: center;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.cell-${sid} {
    padding: 12px;
}

/* Courtesy of https://leaverou.github.io/bubbly/ */
.speech-bubble-${sid} {
    position: relative;
}

.speech-bubble-${sid}:after {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 0;
    height: 0;
    border: 20px solid transparent;
    border-right-color: #eee;
    border-left: 0;
    margin-top: -80px;
    margin-left: -20px;
}
</style>

EOD;

$html_template = <<<EOD
<div class="content-container">
    <div class="pure-g">
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-4">
            <div class="img-container-${sid}">
                <img src="image.jpeg" class="thumbnail-${sid}">
            </div>
        </div>
        <div class="highlight-2-${sid} pure-u-1 pure-u-md-3-4">
            <div class="cell-${sid} speech-bubble-${sid}">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

EOD;

echo $style_template;
echo $html_template;
?>
