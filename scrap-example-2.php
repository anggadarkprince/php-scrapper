<?php
use DiDom\Document;

require "./vendor/autoload.php";

$document = new Document('https://www.barnesandnoble.com', true);

$titles = $document->find(".product-title");
$contributors = $document->find(".product-contributor");

foreach($titles as $index => $title) {
    echo $index, "\n";
    echo $title->text() , "\n";
    echo $contributors[$index]->text() , "\n";
}
