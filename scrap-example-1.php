<?php
use DiDom\Document;

require "./vendor/autoload.php";

$document = new Document('https://calmandcode.teachable.com/courses', true);

$elements = $document->find(".course-listing");

foreach($elements as $element) {
    echo $element->first('.course-listing-title')->text() , "\n";
    echo $element->first('a::attr(href)') , "\n";
}
