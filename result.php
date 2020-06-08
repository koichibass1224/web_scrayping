<?php
//$keyword = $_POST["keyword"];

    //require
    require_once('phpQuery-onefile.php');

    //ページ取得
    /*$url = "https://ja.wikipedia.org/wiki/$keyword";
    $html = file_get_contents($url);*/
    
    $html = file_get_contents("https://ja.wikipedia.org/wiki/アイスランド");
    //var_dump($html);

    //DOM取得
    $doc = phpQuery::newDocument($html);

    //要素取得
    //echo $doc["title"]->text();//通常のテキスト抽出
    //echo $doc[".btn:eq(1)"]->text();//クラスは.でidは#から抽出。eq(1)は段落。
    echo $url;
    echo $keyword;
    echo $doc[".mw-parser-output"]->find("p:eq(1)")->text();

?>