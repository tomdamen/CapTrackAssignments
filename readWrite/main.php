<?php

$inputFile = "./lyrics.txt";

$resultFile = "./result.json";
$lastXLinesFile = "./lastXLines.txt";


function countStr (string $file, string $lookupValue) : string {
    $allText = file_get_contents($file);
    $removeSpecialChars = str_replace([",",".","!","?","\r", "\n", "\r\n"]," ", $allText);
    $allWordsLowercase = strtolower($removeSpecialChars);
    $allWordsArray = explode(' ', $allWordsLowercase);
    $frequency = array_count_values($allWordsArray);
    $frequencyToJson = json_encode(["total" => $frequency[$lookupValue], "word" => $lookupValue]);
    
    return $frequencyToJson;
}

function lastXLines(string $file, int $numberLines) : array {
    $allText = file_get_contents($file);
    $linesArray = explode("\n",$allText);
    $firstLine = count($linesArray) - $numberLines;
    $resultArray = array_slice($linesArray,$firstLine,$numberLines);

    return $resultArray;
}

function printTotal(string $file) : string {
    $decodedFile = json_decode(file_get_contents($file));
    return "Total number of '" . $decodedFile->word . "' is: " . $decodedFile->total;
}



file_put_contents($lastXLinesFile,lastXLines($inputFile,10));

file_put_contents($resultFile,countStr($inputFile,"any"));






