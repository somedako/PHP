<?php
require_once __DIR__ . '/includes/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['title']?></title>


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="./media/css/style.css">
</head>
<body>

  <div id="wrap">
    <?php require_once __DIR__ .'/includes/header.php'?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content_left">
            <div class="block">
              <a href="#">Все записи</a>
              <h3>Новейшее_в_блоге</h3>
              <div class="block_content">
                <div class="articles articles_horizontal">
                    <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles`");
                    while ($art = mysqli_fetch_assoc($articles)) {
                        ?>
                        <article class="article">
                            <div class="article_image" style="background-image: url();"></div>
                            <div class="article_info">
                                <a href="#"><?= $art['title']?></a>
                                <div class="article_info_meta">
                                    <?php
                                    $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories`");
                                    $categories = [];
                                    while ($cat = mysqli_fetch_assoc($categories_q)) {
                                        $categories[] = $cat;
                                    }

                                    $art_cat = false;
                                    foreach ($categories as $cat) {
                                        if ($cat['id'] == $art['categorie_id']) {
                                            $art_cat = $cat;
                                            break;
                                        }
                                    }

                                    ?>
                                    <small>Категория: <a href="#"><?= $art_cat['title']?></a></small>
                                </div>
                                <div class="article_info_preview"><?php echo $art['text']?></div>
                            </div>
                        </article>
                    <?php
                    }
                    ?>
                </div>
              </div>
            </div>

      <div class="block">
          <a href="#">Все записи</a>
          <h3>Безопасность [Новейшее]</h3>
          <div class="block_content">
              <div class="articles articles_horizontal">

                  <article class="article">
                      <div class="article_image"></div>
                      <div class="article_info">
                          <a href="#">Название статьи</a>
                          <div class="article_info_meta">
                              <small>Категория: <a href="#">Программирование</a></small>
                          </div>
                          <div class="article_info_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                      </div>
                  </article>

                  <article class="article">
                      <div class="article_image"></div>
                      <div class="article_info">
                          <a href="#">Название статьи #2</a>
                          <div class="article_info_meta">
                              <small>Категория: <a href="#">Lifestyle</a></small>
                          </div>
                          <div class="article_info_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                      </div>
                  </article>

                  <article class="article">
                      <div class="article_image"></div>
                      <div class="article_info">
                          <a href="#">Название статьи #3</a>
                          <div class="article_info_meta">
                              <small>Категория: <a href="#">Программирование</a></small>
                          </div>
                          <div class="article_info_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                      </div>
                  </article>

                  <article class="article">
                      <div class="article_image"></div>
                      <div class="article_info">
                          <a href="#">Название статьи #4</a>
                          <div class="article_info_meta">
                              <small>Категория: <a href="#">Lifestyle</a></small>
                          </div>
                          <div class="article_info_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                      </div>
                  </article>

          </section>
          <section class="content_right">
              <?php require_once __DIR__ . '/includes/sidebar.php'?>
          </section>
        
  </div>
  <footer id="footer">
      <?php require_once __DIR__ . '/includes/footer.php'?>
    </footer>
</body>
</html>