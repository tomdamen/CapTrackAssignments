<?php

$inputFile = "./lyrics.txt";

$resultFile = "./result.txt";
$lastXLinesFile = "./lastXLines.txt";


function countStr (string $file, string $lookupValue) : int {
    $allText = file_get_contents($file);
    $removeSpecialChars = str_replace([",",".","!","?","\r", "\n", "\r\n"]," ", $allText);
    $allWordsLowercase = strtolower($removeSpecialChars);
    $allWordsArray = explode(' ', $allWordsLowercase);
    $frequency = array_count_values($allWordsArray);
    return $frequency[$lookupValue];
}

function lastXLines(string $file, int $numberLines) : array {
    $allText = file_get_contents($file);
    $linesArray = explode("\n",$allText);
    $firstLine = count($linesArray) - $numberLines;
    $resultArray = array_slice($linesArray,$firstLine,$numberLines);

    return $resultArray;
}



file_put_contents($lastXLinesFile,lastXLines($inputFile,10));

file_put_contents($resultFile,countStr($inputFile,"the"));






