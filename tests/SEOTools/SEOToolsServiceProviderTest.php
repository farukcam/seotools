<?php

namespace farukix\SEOTools\Tests;

/**
 * Class SEOToolsServiceProviderTest.
 */
class SEOToolsServiceProviderTest extends BaseTest
{
    /**
     * Verify if classes are in service container.
     *
     * @dataProvider bindsListProvider
     *
     * @param string $contract
     * @param string $concreteClass
     */
    public function test_container_are_provided($contract, $concreteClass)
    {
        $this->assertInstanceOf(
            $contract,
            $this->app[$concreteClass]
        );
    }

    /**
     * @return array
     */
    public function bindsListProvider()
    {
        return [
            [
                'farukix\SEOTools\Contracts\MetaTags',
                'farukix\SEOTools\SEOMeta',
            ],
            [
                'farukix\SEOTools\Contracts\OpenGraph',
                'farukix\SEOTools\OpenGraph',
            ],
            [
                'farukix\SEOTools\Contracts\SEOTools',
                'farukix\SEOTools\SEOTools',
            ],
            [
                'farukix\SEOTools\Contracts\TwitterCards',
                'farukix\SEOTools\TwitterCards',
            ],
        ];
    }
}
