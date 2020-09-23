<?php

namespace Image;

use Exception;

/**
 * Class ImageResourceFactory
 * 画像リソース作成用
 */
class ImageResourceFactory
{
    /**
     * 画像のリソースを取得します。
     *
     * @param int $width - 画像の幅
     * @param int $height - 画像の高さ
     * @return resource - 画像リソース
     * @throws Exception - 画像作成に失敗した場合、例外を返します。
     */
    public static function getImageResource(int $width, int $height)
    {
        $resource = imagecreate($width, $height);
        if ($resource === false) {
            throw new Exception('Failed to create image resource.');
        }
        return $resource;
    }
}
