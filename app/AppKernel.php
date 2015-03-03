<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Jaxxes\RolBundle\RolBundle(),
            new Jaxxes\ResumeBundle\ResumeBundle(),
            new Jaxxes\VirtualInterviewBundle\VirtualInterviewBundle(),
            new Jaxxes\SeleccionProcesBundle\SeleccionProcesBundle(),
            new Jaxxes\RegisterDefinitionRolBundle\RegisterDefinitionRolBundle(),
            new Jaxxes\CandidateBundle\CandidateBundle(),
            new Jaxxes\EnterpriseBundle\EnterpriseBundle(),
            new Jaxxes\GeneralBundle\GeneralBundle(),
            new Jaxxes\DefinitionTestBundle\DefinitionTestBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Jaxxes\NivelBundle\NivelBundle(),
            new Jaxxes\TestGatbBundle\TestGatbBundle(),
            new Jaxxes\TestGatbSPBundle\TestGatbSPBundle(),
            new Jaxxes\EscudoSPBundle\EscudoSPBundle(),
            new Jaxxes\EscudoBundle\EscudoBundle(),
            new Jaxxes\TestICEBundle\TestICEBundle(),
            new Jaxxes\TestICESPBundle\TestICESPBundle(),
            new Jaxxes\TestPmaBundle\TestPmaBundle(),
            new Jaxxes\TestPmaSPBundle\TestPmaSPBundle(),
            new Jaxxes\RavenBundle\RavenBundle(),
            new Jaxxes\RavenSPBundle\RavenSPBundle(),
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
/*            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();*/
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
