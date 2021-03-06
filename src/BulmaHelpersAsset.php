<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bulma;

use Yiisoft\Assets\AssetBundle;

final class BulmaHelpersAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/bulma-helpers/css';
    public array $css = [
        'bulma-helpers.css',
    ];
    public array $publishOptions = [
        'only' => [
            'bulma-helpers.css',
        ],
    ];
}
