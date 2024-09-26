<?php

/*
    Fobe 2021
*/

namespace Fobe\Common {
    class ContentDelivery
    {
        public static function ConstructRenderHashUrl(string $hash)
        {
            return $GLOBALS['renderCDN']."/".$hash;
        }

        public static function ConstructThumbnailHashUrl(string $hash)
        {
            return $GLOBALS['thumbnailCDN']."/".$hash;
        }

        public static function ConstructAssetHashUrl(string $hash)
        {
            return $GLOBALS['assetCDN']."/".$hash;
        }
    }
}