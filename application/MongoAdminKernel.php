<?php

require_once __DIR__ . '/autoload.php';

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\DependencyInjection\Loader\LoaderInterface;

class MongoAdminKernel extends Kernel {

	public function registerRootDir() {
		return __DIR__;
	}

	public function registerBundles() {
		return array(
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Symfony\Bundle\ZendBundle\ZendBundle(),
			new Symfony\Bundle\TwigBundle\TwigBundle(),
			new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(),

			new Bundle\MongoAdminBundle\MongoAdminBundle(),
		);
	}

	public function registerBundleDirs() {
		return array(
			'Bundle'         => __DIR__ . '/../src/Bundle',
			'Symfony\Bundle' => __DIR__ . '/../vendor/symfony/src/Symfony/Bundle',
		);
	}

	public function registerContainerConfiguration(LoaderInterface $loader) {
		return $loader->load(__DIR__ . '/config/config.yml');
	}
}
