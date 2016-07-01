<?php
/**
 * Created by PhpStorm.
 * User: mostkaj
 * Date: 1. 7. 2016
 * Time: 14:05
 */
//$ProjectFileDir$ "C:\Users\mostkaj\PhpstormProjects\phptojs-examples"
//$FileRelativePath$ "examples\tuc\test.php"
//$exportDir "public"

namespace converter;

global $argv;
use PhpParser\ParserFactory;
use phptojs\JsPrinter\JsPrinter;

require_once __DIR__."/../vendor/autoload.php";

$projectFileDir=$argv[1];
$fileRelativePath=$argv[2];
$exportDir=$argv[3];
define("DS",DIRECTORY_SEPARATOR);

try {
    
    $sourceFile = $projectFileDir . DS . $fileRelativePath;
    $exportFile = basename($fileRelativePath);
    $exportFile = $projectFileDir.DS.$exportDir.DS.substr($fileRelativePath,0,-(strlen($exportFile)+1)).DS.basename($fileRelativePath,".php").".js";

    $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
    $jsPrinter = new JsPrinter();

    $phpCode = file_get_contents($sourceFile);
    $stmts = $parser->parse($phpCode);
    $jsCode = $jsPrinter->jsPrint($stmts);

    if (!file_exists(dirname($exportFile))){
        mkdir(dirname($exportFile),0777,true);
    }

	$jsCode = preg_replace('/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/', "\n", $jsCode);
	
    file_put_contents($exportFile,$jsCode);

    exec("jsbeautify {$exportFile} {$exportFile}", $output, $returnCode);

	$time = date("d.H.i");
    echo "OK:{$time} ".$fileRelativePath;
}catch (\Exception $e){
    echo $e->getTraceAsString();
}