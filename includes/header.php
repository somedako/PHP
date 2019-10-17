<?php
require_once __DIR__ . '/config.php';
?>
    <header id="header">
      <div class="header_top">
        <div class="container">
          <div class="header_logo">
            <h1><?php echo $config['title']?></h1>
          </div>
          <nav class="header_menu">
            <ul>
              <li><a href="#"><?= $config['menu']['landing']?></a></li>
              <li><a href="#"><?= $config['menu']['blog']?></a></li>
              <li><a href="#"><?= $config['menu']['news']?></a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="header_bottom">
        <div class="container">
          <nav>
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
      </div>
    </header>