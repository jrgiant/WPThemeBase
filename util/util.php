<?php

$isDev = true;
function displayInJSConsole($message){
    echo "<script>console.log(`$message`);</script>";
}
function displayKeyValueInJSConsole($keyName, $value){
    displayInJSConsole("Value of $keyName: $value");
}