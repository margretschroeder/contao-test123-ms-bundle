<?php



namespace Margretschroeder\ContaoTest123MsBundle\Tests;

use Margretschroeder\ContaoTest123MsBundle\ContaoTest123Ms;
use PHPUnit\Framework\TestCase;

class ContaoTest123MsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSkeletonBundle();

        $this->assertInstanceOf('Contao\SkeletonBundle\ContaoSkeletonBundle', $bundle);
    }
}
