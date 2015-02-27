<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     *
     * @return array|\Symfony\Component\HttpKernel\Bundle\BundleInterface[]
     */
    public function registerBundles()
    {
        return [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new ONGR\ElasticsearchBundle\ONGRElasticsearchBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new ONGR\TranslationsBundle\Tests\app\fixture\Acme\TestBundle\AcmeTestBundle(),
            new ONGR\TranslationsBundle\ONGRTranslationsBundle(),
            new ONGR\FilterManagerBundle\ONGRFilterManagerBundle(),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param LoaderInterface $loader
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
