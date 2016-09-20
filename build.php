<?php
<<<CONFIG
packages:
    - "mnapoli/front-yaml: *"
CONFIG;

/**
 * Build search index data for wwphp-fb.github.io.
 * Usage: melody run build.php
 */

use Mni\FrontYAML\Parser;

$parser = new Parser();
$directory = __DIR__.'/_resources';
$exclude = ['.git', 'images', '.gitignore', 'CONTRIBUTING.md', 'LICENSE', 'README.md'];

$filter = function ($file, $key, $iterator) use ($exclude) {
    if ($iterator->hasChildren() && !in_array($file->getFilename(), $exclude)) {
        return true;
    }

    return ($file->isFile() && !in_array($file->getFilename(), $exclude));
};

$innerIterator = new RecursiveDirectoryIterator(
    $directory,
    RecursiveDirectoryIterator::SKIP_DOTS
);
$iterator = new RecursiveIteratorIterator(
    new RecursiveCallbackFilterIterator($innerIterator, $filter)
);

$index = ['entries' => []];
foreach ($iterator as $pathName => $fileInfo) {
    $document = $parser->parse(file_get_contents($pathName));
    $yaml = $document->getYAML();

    $index['entries'][] = [
        "title" => $yaml['title'],
        "url" => $yaml['permalink'],
        "date" => '',
        "body" => '',
        "categories" => []
    ];
}

file_put_contents('./assets/js/lunr/indexdata.json', json_encode($index), LOCK_EX);
