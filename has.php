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

// has element
$element1 = $document->has('div');
$element2 = $document->has('span');
$element3 = $document->has('img');
$element4 = $document->has('#fourthDiv');

echo "has div: ", $element1 , "\n";
echo "has span: ", $element2 , "\n";
echo "has img: ", $element3 , "\n";
echo "has 4th div: ", $element4 , "\n";

// count element
$totalP = $document->count('p');
$totalDiv = $document->count('div');
$totalImage = $document->count('img');
echo "total p: ", $totalP , "\n";
echo "total div: ", $totalDiv , "\n";
echo "total img: ", $totalImage , "\n";

// get first element
print_r($document->first('div')->text());