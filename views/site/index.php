<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <ul style="list-style: none">
    <?php
    foreach ($countries as $country) {
        echo '<li>' . $country['code'] . '</li>';
    }
    ?>
    </ul>
</div>
