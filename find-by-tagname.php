<?php
use DiDom\Document;

require "./vendor/autoload.php";

$html = "<div>
<p>This is HTML 1</p>
<p>This is HTML 2</p>
<p>This is HTML 3</p>
</div>";

$document = new Document('./example.txt', true);

$posts = $document->find('p');

foreach($posts as $post) {
    echo $post->text(), "\n";
}