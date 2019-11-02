<?php
namespace SfpTest\Psalm\PsrLogPlugin;

use Psalm\Internal\Analyzer\ProjectAnalyzer;
use SimpleXMLElement;
use Sfp\Psalm\PsrLogPlugin\Plugin;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use Psalm\Plugin\RegistrationInterface;

class PluginTest extends TestCase
{
    /**
     * @var ObjectProphecy
     */
    private $registration;

    public function setUp() : void
    {
        $this->registration = $this->prophesize(RegistrationInterface::class);

        $projectAnalyzer = new ProjectAnalyzer(
            new Config
        );
//        $projectAnalyzer->
    }

    /**
     * @test
     */
    public function hasEntryPoint()
    {
        $this->expectNotToPerformAssertions();
        $plugin = new Plugin();
        $plugin($this->registration->reveal(), null);
    }

//    /**
//     * @test
//     */
//    public function acceptsConfig() : void
//    {
//        $this->expectNotToPerformAssertions();
//        $plugin = new Plugin();
//        $plugin($this->registration->reveal(), new SimpleXMLElement('<myConfig></myConfig>'));
//    }


//    }
}
