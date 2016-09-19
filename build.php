<?php

<<<CONFIG
packages:
    - "mnapoli/front-yaml: *"
    - "symfony/yaml: ~3.1"
CONFIG;

use Symfony\Component\Yaml\Yaml;
use Mni\FronYAML\Parser;

$parser = new Mni\FrontYAML\Parser();

// parse groups.yml file
$groups = Yaml::parse(file_get_contents('./_data/groups.yml'));

$index = [];

foreach ($groups['faq'] as $group) {
    $path = realpath('./_resources/faq/' . $group['slug']);

    $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
    $faqs = [];

    foreach ($objects as $name => $object) {
        $document = $parser->parse(file_get_contents($name));

        if ($object->isFile()) {
            $yaml = $document->getYAML();

            $faqs[$name] = [
                'title'   => $yaml['title'],
                'path'    => $yaml['permalink'],
                'updated' => '',
                'body'    => '',//$document->getContent()
            ];
        }
    }

    ksort($faqs);

    foreach ($faqs as $faq) {
        $index[] = [
            "title" => $faq['title'],
            "url" => $faq['path'],
            "date" => $faq['updated'],
            "body" => $faq['body'],
            "categories" => []
        ];
    }
}

// add articles to index
$path = realpath('./_resources/articles');
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
foreach ($objects as $name => $object) {
    $document = $parser->parse(file_get_contents($name));

    if ($object->isFile()) {
        $yaml = $document->getYAML();

        $index[] = [
            "title" => $yaml['title'],
            "url"  => $yaml['permalink'],
            'date' => '',
            'body'    => '',
            "categories" => []
        ];
    }
}

$indexData = ["entries" => $index];

file_put_contents('./assets/js/lunr/indexdata.json', json_encode($indexData), LOCK_EX);
