<?php
use DiDom\Document;

require "./vendor/autoload.php";

$html = "<div id='firstDiv'>
<p><span>This is HTML 1</span></p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>
<ul class='menu'>
<li>Home</li>
<li>Service</li>
<li>Contact</li>
</ul>";

$document = new Document($html, false);

$paragraphs = $document->xpath("//ul[contains(@class, 'menu')]");
$div = $document->xpath("//ul[contains(@id, 'firstDiv')]");
//$paragraphs = $document->find(".menu");

foreach($paragraphs as $paragraph) {
    echo $paragraph->tagName() , "\n";
    echo $paragraph->getAttribute('class') , "\n";
    echo $paragraph->text() , "\n";
}