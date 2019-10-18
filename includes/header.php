<?php
$data = require_once __DIR__ . '/config.php';
$menu = $data['menu'];
?>
    <header id="header">
      <div class="header_top">
        <div class="container">
          <div class="header_logo">
            <h1><?php echo $data['title']?></h1>
          </div>
          <nav class="header_menu">
            <ul>
              <li><a href="#"><?= $menu['landing']?></a></li>
              <li><a href="#"><?= $menu['blog']?></a></li>
              <li><a href="#"><?= $menu['news']?></a></li>
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