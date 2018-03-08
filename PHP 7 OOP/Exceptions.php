<?php
$file = 'C:/folder/testFile.txt';

try {
    if (!file_exists($file)) {
        throw new Exception("File ".$file." doesn't exists");
    }
    echo "If ".$file." exists then this message will be printed";
} catch (Exception $ex) {
    echo 'Message: '.$ex->getMessage().' Trace: '.$ex->getTraceAsString();
}