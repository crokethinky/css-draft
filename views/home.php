<?php ob_start(); ?>

<p>home</p>
<div id="menu">
    <ul>
        <li>Default</li>
        <li class="vseparator" />
        <li>Two Rows</li>
        <li class="vseparator" />
        <li>Asymmetric Left</li>
        <li class="vseparator" />
        <li>Asymmetric Right</li>
        <li class="vseparator" />
        <li>Three Rows</li>
    </ul>
</div>

<?php
$content = ob_get_clean();
include DIR_LAYOUT . '/layout.php';