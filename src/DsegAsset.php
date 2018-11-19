<?php
/**
 * @copyright Copyright (C) 2015-2018 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

declare(strict_types=1);

namespace statink\yii2\dseg;

class DsegAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/dseg';
    public $css = [
        'css/dseg.css',
    ];
}
