<?php

$response = (string)(int)$_GET['r'];
$answer = file_get_contents(__DIR__ . '/../data/answer.txt');

if ($response === $answer) {
    header('Location: index.php?result=正解！');
} else {
    header('Location: index.php?result=不正解');
}
