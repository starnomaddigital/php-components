<?php
$sid = uniqid(time());

$style_template = <<<EOD
<style>

.cell-${sid} {
    height: 100%;
}

.card-container-${sid} {
    padding: 8px;
    height: 90%;
}

.card-${sid} {
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: block;
    position: relative;
    height: 250px;
    text-align: justify;
    text-align-last: center;
}

.highlight-${sid} {
    background-color: #aaa;
}

.card-highlight-${sid} {
    background-color: #eee;
}

.card-title-${sid} {
    background-color: black;
    color: #eee;
    height: 15%;
}

.card-title-${sid} h2 {
    margin: 0;
}

.card-img-${sid} {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 86%;
}

.card-img-${sid} p {
    margin: 0;
    opacity: 0;
    border-radius: 10px;
    background: #333;
    color: #eee;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>

EOD;

$html_template = <<<EOD
<div class="pure-g">
    <div class="row">
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <div class="card-title-${sid}">
                            <h2>{{ title1 }}</h2>
                        </div>
                        <div class="card-img-${sid}" style="background-image: url('{{ image1 }}')">
                            <!-- Some text has to be included, strangely, in order to get the Pure grids to expand properly. So, here it is. -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <div class="card-title-${sid}">
                            <h2>{{ title2 }}</h2>
                        </div>
                        <div class="card-img-${sid}" style="background-image: url('{{ image2 }}')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
            <div class="card-container-${sid}">
                <div class="card-${sid} card-highlight-${sid}">
                    <div class="cell-${sid}">
                        <div class="card-title-${sid}">
                            <h2>{{ title3 }}</h2>
                        </div>
                        <div class="card-img-${sid}" style="background-image: url('{{ image3 }}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

EOD;

echo $style_template;
echo $html_template;
