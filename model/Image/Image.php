<?php

namespace Image;

use Exception;
use Image\ImageResourceFactory;

/**
 * Class Image
 * 画像の作成・編集・保存
 */
class Image
{
    /**
     * @var resource $resource - 画像リソース
     */
    public $resource;

    /**
     * Image constructor.
     * @param int $width - 画像の幅
     * @param int $height - 画像の高さ
     * @throws Exception - 画像作成に失敗した場合、例外を返します。
     */
    public function __construct(int $width, int $height)
    {
        $this->resource = ImageResourceFactory::getImageResource($width, $height);
    }

    public function paintIn(int $red, int $green, int $blue)
    {
        imagecolorallocate($this->resource, $red, $green, $blue);
    }

    public function saveAs(string $filename)
    {
        imagepng($this->resource, $filename);
    }
}
