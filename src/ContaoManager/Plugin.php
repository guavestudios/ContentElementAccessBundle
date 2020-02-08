<?php

namespace Guave\ContentElementAccess\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Guave\ContentElementAccess\GuaveContentElementAccessBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * @inheritDoc
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(GuaveContentElementAccessBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
