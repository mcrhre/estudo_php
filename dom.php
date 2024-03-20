<?php

$dom = new DOMDocument();


$html = file_get_contents('http://www.globo.com');

@$dom->loadHTML($html);

// Inicializa o array que armazenará os links
$links = [];

// Itera
foreach($dom->getElementsByTagName('a') as $link) {
    $links[] = [
        'url' => trim($link->getAttribute('href')),
        'text' => trim($link->nodeValue)
    ];
}

// Imprime todos os links coletados
echo '<pre>';
print_r($links);