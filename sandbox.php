<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// file system - Part 1

// $quotes = readfile('readmee.md');
// echo $quotes;

$file = 'readme.md';

if(file_exists($file)){

    // read file
    // echo readfile($file) . '<br/>';

    // // copy file
    // copy($file,'quotes.md');

    // // absoulte path
    // echo realpath($file) . '<br/>';

    // // file size
    // echo filesize($file) . '<br/>';
    
    // //rename file
    // rename($file, 'test.md');



} else {
    echo 'file does not exist';
}

mkdir('quotes');

?>

