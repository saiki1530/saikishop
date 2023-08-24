<?php
$name = Auth::user()->name;
$lastWord = strrchr($name, ' ');

if ($lastWord !== false) {
    $lastWord = trim($lastWord);
} else {
    $lastWord = $name;
}

echo $lastWord;
?>
