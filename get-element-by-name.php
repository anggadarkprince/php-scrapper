<?php
use DiDom\Document;

require "./vendor/autoload.php";

$html = "<div id='firstDiv'>
<p><span>This is HTML 1</span></p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>
<div id='secondDiv'>
<p><span>This is HTML 1</span></p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>
<div id='thirdDiv'>
<p><span>This is HTML 1</span></p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>";

$document = new Document($html, false);

$paragraphs = $document->find('div');

foreach($paragraphs as $paragraph) {
    echo $paragraph->tagName();
    echo $paragraph->text() , "\n";
}