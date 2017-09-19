<?php

require __DIR__."/BaseRequest.php";

if((!empty($_POST['text'])) && (!empty($_POST['title'])) ){
    $new_article=new BaseRequest('news_bd');

    $new_article->add_new();

    header('Location: ../index.php');
};

if(empty($_POST['text'])){
    echo "Пустые статьи не принимаются.";
    ?>
    <a href="../index.php">назад</a>
<?php
};

if(empty($_POST['title'])){
    echo "Озаглавьте статью";
    ?>
    <a href="../index.php">назад</a>
    <?php
};
?>