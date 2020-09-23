<?php

require_once __DIR__ . '/Image/ImageResourceFactory.php';
require_once __DIR__ . '/Image/Image.php';

use Image\Image;

function main($imageCount)
{
    $correctColor = array(
        'red' => getRandomInt(0, 255),
        'green' => getRandomInt(0, 255),
        'blue' => getRandomInt(0, 255),
    );
    $incorrectColor = array(
        'red' => getRandomInt(0, 255),
        'green' => getRandomInt(0, 255),
        'blue' => getRandomInt(0, 255),
    );

    $collectImageIndex = getRandomInt(0, $imageCount - 1);

    $width = 100;
    $height = 100;

    for ($i = 0; $i < $imageCount; ++$i) {
        $filename = __DIR__ . '/../data/image' . $i . '.png';
        if ($i === $collectImageIndex) {
            outputImage($width, $height, $correctColor, $filename);
        } else {
            outputImage($width, $height, $incorrectColor, $filename);
        }
    }

    file_put_contents(__DIR__ . '/../data/answer.txt', $collectImageIndex);
}

function getRandomInt(int $min, int $max = null, int $fixed = null): int
{
    if (isset($fixed)) {
        return $fixed;
    }
    return rand($min, $max);
}

function outputImage(int $width, int $height, array $color, string $filename)
{
    try {
        $image = new Image($width, $height);
        $image->paintIn($color['red'], $color['green'], $color['blue']);
        $image->saveAs($filename);
    } catch (Exception $e) {
    }
}
