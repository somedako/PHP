<?php require_once __DIR__ . '/config.php'?>

<div class="container">
    <div class="footer_logo">
        <h2><?php echo $config['title']?></h2>
    </div>
    <nav class="footer_menu">
        <ul>
            <?php
            $a = $config['nav'];
            foreach ($a as $value) {?>
                <li><a href="#"><?php echo $value?></a></li>
            <? }
            ?>
        </ul>
    </nav>
</div>