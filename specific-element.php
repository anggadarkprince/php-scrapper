<?php
use DiDom\Document;

require "./vendor/autoload.php";

$html = "<div>
<p>This is HTML 1</p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>";

$document = new Document($html, false);

$paragraph = $document->find('p');

echo $paragraph[0], "\n";
echo $paragraph[0]->text(), "\n";
echo $paragraph[1]->text(), "\n";