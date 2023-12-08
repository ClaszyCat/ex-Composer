<?php

require 'vendor/autoload.php';
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer = $stemmerFactory->createStemmer();
$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$output = $stemmer->stem($sentence);
echo $output . "\n"; //Output
?>