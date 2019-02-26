<?php
$sid = uniqid(time());

$style_template = <<<EOD

<style>
#content-container-${sid} {
    font-family: sans-serif;
}

.cell-${sid} {
    padding: 12px;
}

.highlight-${sid} {
    background-color: #eee;
    height: 100%;
}

.vertical-card-${sid} {
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-left: 6px;
    margin-right: 6px;
    display: block;
    position: relative;
    background-color: #aaa;
}

.sidebar-title-${sid} {
    text-align: right;
    top: 50%;
}

.content-segment-${sid} {
    margin-left: 5px;
    padding-bottom: 1px;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #ccc;
    border-radius: 10px;

}
</style>

EOD;

$html_template = <<<EOD
<div id="content-container-${sid}">
    <div class="pure-g">

        <div class="row">
            <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
                <div class="vertical-card-${sid}">
                    <h2 class="cell-${sid} sidebar-title-${sid}">{{ title1 }}</h2>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-2-3">
                <div class="content-segment-${sid}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
                <div class="vertical-card-${sid}">
                    <h2 class="cell-${sid} sidebar-title-${sid}">{{ title2 }}</h2>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-2-3">
                <div class="content-segment-${sid}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="highlight-${sid} pure-u-1 pure-u-md-1-3">
                <div class="vertical-card-${sid}">
                    <h2 class="cell-${sid} sidebar-title-${sid}">{{ title3 }}</h2>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-2-3">
                <div class="content-segment-${sid}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

    </div>
</div>

EOD;

echo $style_template;
echo $html_template;

?>
