<?php
$sid = uniqid(time());

$style_template = <<<EOD
<style>

.cell-${sid} {
    padding: 8px 12px;
}

.card-container-${sid} {
    padding: 8px;
    height: 90%;
}

.card-${sid} {
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: block;
    position: relative;
    height: 100%;
    text-align: justify;
    text-align-last: center;
}

.highlight-${sid} {
    background-color: #aaa;
    height: 100%
}

.card-highlight-${sid} {
    background-color: #eee;
}

</style>

EOD;

$card_template = <<<EOD
<div class="pure-g">
    <div class="row">
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <h2>{{ title1 }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <h2>{{ title2 }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <h2>{{ title3 }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

EOD;

echo $style_template;
echo $card_template;
?>
