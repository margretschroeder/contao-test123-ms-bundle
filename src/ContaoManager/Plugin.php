<?php


namespace Margretschroeder\ContaoTest123MsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Margretschroeder\ContaoTest123MsBundle\ContaoTest123MsBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
    
    public function getBundles(ParserInterface $parser)
    {
    
	    return [
            BundleConfig::create(ContaoTest123MsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
	
	 */
	public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoTest123MsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
	
	
	
}
