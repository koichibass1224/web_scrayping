<!--makuake-->
<?php
    //require
    require_once('phpQuery-onefile.php');

    //ページ取得
    $html = file_get_contents("https://www.makuake.com/discover/new");

    //DOM取得
    $doc = phpQuery::newDocument($html);

    //要素取得
    //var_dump($html);//echoでhtmlは表示できるが、new情報だけ取得できない。これが原因？？
    echo $doc[".projects"]->find("img:eq(1)")->text(); //imgのソースを取得したい
    echo $doc[".projects"]->find("h4")->text();//タイトル
    echo $doc[".projects"]->find(".money")->find("p:eq(1)")->text();//金額
    echo $doc[".money:eq(1)"]->find("p:eq(1)")->text();//金額・こちらが正しい？？
?>