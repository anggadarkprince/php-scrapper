<?php
use DiDom\Document;

require "./vendor/autoload.php";

$html = "<div>
<p><span>This is HTML 1</span></p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>";

$document = new Document($html, false);

$paragraph1 = $document->find('div')[0]->first('p');
// same as
$paragraph2 = $document->first('div')->first('span'); // span is inside (even not direct child)
$paragraph3 = $document->first('div')->first('p')->first('span');

echo $paragraph1, "\n";
echo $paragraph2, "\n";
echo $paragraph3, "\n";