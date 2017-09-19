<?php

require "BaseRequest.php";

if(!empty($_POST['go'])){
    $new_article=new BaseRequest('news_bd');

    $new_article->add_new();

    echo "lala";
}