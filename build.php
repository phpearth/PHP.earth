<?php
<<<CONFIG
packages:
    - "mnapoli/front-yaml: *"
    - "symfony/yaml: ~2.7"
CONFIG;

use Symfony\Component\Yaml\Yaml;
use Mni\FronYAML\Parser;

$parser = new Mni\FrontYAML\Parser();

// parse groups.yml file
$groups = Yaml::parse(file_get_contents('./_data/groups.yml'));

$data = 'PHP Facebook group\'s frequently asked questions is a community driven project with answers to some frequently asked questions that are located on <a href="https://github.com/wwphp-fb/php-resources">GitHub</a> for better code readability and better versioning capabilities. Please read these if you have PHP issue. You can also <a href="http://wwphp-fb.github.io/search.html">search for content</a>.<br><br>';

$index = [];

foreach ($groups['faq'] as $group) {
    $data .= '<strong>' . $group['title'] . '</strong>';
    $data .= '<ul>';

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
        $data .= '<li><a href="http://wwphp-fb.github.io' . $faq['path'] . '">' . $faq['title'] . '</a></li>';

        $index[] = [
            "title" => $faq['title'],
            "url" => $faq['path'],
            "date" => $faq['updated'],
            "body" => $faq['body'],
            "categories" => []
        ];
    }

    $data .= '</ul>';
}

$data .= '<strong>Want to get involved?</strong><br>We are always looking forward to see your contribution to this list of questions as well. How to contribute is mentioned in the <a href="http://wwphp-fb.github.io/contribute.html">contributing section</a> together with great people making this possible.<br>
This work is licensed under a Creative Commons Attribution 4.0 International License.';

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

file_put_contents('./faq-facebook-document.html', $data, LOCK_EX);
file_put_contents('./assets/js/lunr/indexdata.json', json_encode($indexData), LOCK_EX);


// Parse rules

// parse rules.yml file
$rules = Yaml::parse(file_get_contents('./_data/rules/rules.yml'));

$data = '<strong>Do\'s and don\'ts of the PHP Facebook group</strong><br>Dear members, programming is a lot about following rules with good practices and so is posting in this group. Let\'s take a moment and read the group rules so we can have useful and safe discussion environment. These rules are hosted on <a href="https://github.com/wwphp-fb/group-rules">GitHub</a> and presented on the <a href="http://wwphp-fb.github.io/rules.html">main group GitHub page</a>.';
$data .= '<ul>';

foreach ($rules as $rule) {
    if(isset($rule['title']) && isset($rule['description'])) {
        $data .= '<li><strong>' . $rule['title'] . '</strong><br>' . $rule['description'] . '</li>';
    }
}

$data .= '</ul><br>';
$data .= 'Enjoy your stay at the group and don\'t be shy to ask your question.';

file_put_contents('./rules.html', $data, LOCK_EX);
