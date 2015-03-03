<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _assetic_e8b7ee0
        if ($pathinfo === '/css/e8b7ee0.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8b7ee0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e8b7ee0',);
        }

        // _assetic_1b37284
        if ($pathinfo === '/js/1b37284.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1b37284',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1b37284',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/rvsp')) {
                // rv_new
                if ($pathinfo === '/rvsp/new') {
                    return array (  '_controller' => 'Jaxxes\\RavenSPBundle\\Controller\\RavenTestController::newAction',  '_route' => 'rv_new',);
                }

                // rv_next
                if (preg_match('#^/rvsp/(?P<idQuestion>[^/]++)/(?P<orden>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rv_next')), array (  '_controller' => 'Jaxxes\\RavenSPBundle\\Controller\\RavenTestController::nextAction',));
                }

                // rv_inst
                if ($pathinfo === '/rvsp/inst') {
                    return array (  '_controller' => 'Jaxxes\\RavenSPBundle\\Controller\\RavenTestController::instAction',  '_route' => 'rv_inst',);
                }

            }

            // raven_homepage
            if (0 === strpos($pathinfo, '/rs/hello') && preg_match('#^/rs/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'raven_homepage')), array (  '_controller' => 'Jaxxes\\RavenBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pma_sp')) {
            // test_pma_sp_homepage
            if (0 === strpos($pathinfo, '/pma_sp/hello') && preg_match('#^/pma_sp/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_sp_homepage')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\DefaultController::indexAction',));
            }

            // test_pma_sp_new
            if (preg_match('#^/pma_sp/(?P<idspcandidate>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\DefaultController::newAction',));
            }

            // test_pma_sp_create
            if ($pathinfo === '/pma_sp/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_test_pma_sp_create;
                }

                return array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\DefaultController::createAction',  '_route' => 'test_pma_sp_create',);
            }
            not_test_pma_sp_create:

            // test_pma_sp_show
            if (preg_match('#^/pma_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\DefaultController::showAction',));
            }

            if (0 === strpos($pathinfo, '/pma_sp/test_pma_part')) {
                if (0 === strpos($pathinfo, '/pma_sp/test_pma_part1_sp')) {
                    // test_pma_part1_sp_new
                    if (preg_match('#^/pma_sp/test_pma_part1_sp/(?P<idpmasp>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part1_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart1SPController::newAction',));
                    }

                    // test_pma_part1_sp_create
                    if (preg_match('#^/pma_sp/test_pma_part1_sp/(?P<idpmasp>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test_pma_part1_sp_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part1_sp_create')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart1SPController::createAction',));
                    }
                    not_test_pma_part1_sp_create:

                    // test_pma_part1_sp_show
                    if (preg_match('#^/pma_sp/test_pma_part1_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part1_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart1SPController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/pma_sp/test_pma_part2_sp')) {
                    // test_pma_part2_sp_new
                    if (preg_match('#^/pma_sp/test_pma_part2_sp/(?P<idpmasp>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part2_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart2SPController::newAction',));
                    }

                    // test_pma_part2_sp_create
                    if (preg_match('#^/pma_sp/test_pma_part2_sp/(?P<idpmasp>[^/]++)/(?P<block>[^/]++)/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test_pma_part2_sp_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part2_sp_create')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart2SPController::createAction',));
                    }
                    not_test_pma_part2_sp_create:

                    // test_pma_part2_sp_next_new
                    if (preg_match('#^/pma_sp/test_pma_part2_sp/(?P<id>[^/]++)/(?P<block>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part2_sp_next_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart2SPController::next_newAction',));
                    }

                    // test_pma_part2_sp_show
                    if (preg_match('#^/pma_sp/test_pma_part2_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part2_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart2SPController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/pma_sp/test_pma_part3_sp')) {
                    // test_pma_part3_sp_new
                    if (preg_match('#^/pma_sp/test_pma_part3_sp/(?P<idpmasp>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part3_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart3SPController::newAction',));
                    }

                    // test_pma_part3_sp_create
                    if (preg_match('#^/pma_sp/test_pma_part3_sp/(?P<idpmasp>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test_pma_part3_sp_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part3_sp_create')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart3SPController::createAction',));
                    }
                    not_test_pma_part3_sp_create:

                    // test_pma_part3_sp_show
                    if (preg_match('#^/pma_sp/test_pma_part3_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part3_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart3SPController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/pma_sp/test_pma_part4_sp')) {
                    // test_pma_part4_sp_new
                    if (preg_match('#^/pma_sp/test_pma_part4_sp/(?P<idpmasp>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part4_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart4SPController::newAction',));
                    }

                    // test_pma_part4_sp_create
                    if (preg_match('#^/pma_sp/test_pma_part4_sp/(?P<idpmasp>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test_pma_part4_sp_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part4_sp_create')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart4SPController::createAction',));
                    }
                    not_test_pma_part4_sp_create:

                    // test_pma_part4_sp_show
                    if (preg_match('#^/pma_sp/test_pma_part4_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part4_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart4SPController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/pma_sp/test_pma_part5_sp')) {
                    // test_pma_part5_sp_new
                    if (preg_match('#^/pma_sp/test_pma_part5_sp/(?P<idpmasp>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part5_sp_new')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart5SPController::newAction',));
                    }

                    // test_pma_part5_sp_create
                    if (preg_match('#^/pma_sp/test_pma_part5_sp/(?P<idpmasp>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test_pma_part5_sp_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part5_sp_create')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart5SPController::createAction',));
                    }
                    not_test_pma_part5_sp_create:

                    // test_pma_part5_sp_show
                    if (preg_match('#^/pma_sp/test_pma_part5_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part5_sp_show')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart5SPController::showAction',));
                    }

                    // test_pma_part5_sp_diccionario
                    if (preg_match('#^/pma_sp/test_pma_part5_sp/(?P<id>[^/]++)/diccionario$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_pma_part5_sp_diccionario')), array (  '_controller' => 'Jaxxes\\TestPmaSPBundle\\Controller\\PmaPart5SPController::searchAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/ice')) {
            if (0 === strpos($pathinfo, '/ice_sp')) {
                // test_ice_new
                if (preg_match('#^/ice_sp/(?P<idspc>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_ice_new')), array (  '_controller' => 'Jaxxes\\TestICESPBundle\\Controller\\TestICESPController::newAction',));
                }

                // test_ice_create
                if (preg_match('#^/ice_sp/(?P<idspc>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_test_ice_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_ice_create')), array (  '_controller' => 'Jaxxes\\TestICESPBundle\\Controller\\TestICESPController::createAction',));
                }
                not_test_ice_create:

            }

            // test_ice_homepage
            if (0 === strpos($pathinfo, '/ice/hello') && preg_match('#^/ice/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_ice_homepage')), array (  '_controller' => 'Jaxxes\\TestICEBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/escudo')) {
            // escudo_homepage
            if (0 === strpos($pathinfo, '/escudo/hello') && preg_match('#^/escudo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escudo_homepage')), array (  '_controller' => 'Jaxxes\\EscudoBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/escudo_sp')) {
                // test_escudo_new
                if ($pathinfo === '/escudo_sp/new') {
                    return array (  '_controller' => 'Jaxxes\\EscudoSPBundle\\Controller\\EscudoSPController::newAction',  '_route' => 'test_escudo_new',);
                }

                // test_escudo_create
                if ($pathinfo === '/escudo_sp/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_test_escudo_create;
                    }

                    return array (  '_controller' => 'Jaxxes\\EscudoSPBundle\\Controller\\EscudoSPController::createAction',  '_route' => 'test_escudo_create',);
                }
                not_test_escudo_create:

                // test_escudo_show
                if (preg_match('#^/escudo_sp/(?P<idspc>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_escudo_show')), array (  '_controller' => 'Jaxxes\\EscudoSPBundle\\Controller\\EscudoSPController::showAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/gatb')) {
            if (0 === strpos($pathinfo, '/gatb_sp')) {
                // test_gatb_sp_homepage
                if (0 === strpos($pathinfo, '/gatb_sp/hello') && preg_match('#^/gatb_sp/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_sp_homepage')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\DefaultController::indexAction',));
                }

                // test_gatb_sp_new
                if ($pathinfo === '/gatb_sp/new') {
                    return array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\DefaultController::newAction',  '_route' => 'test_gatb_sp_new',);
                }

                // test_gatb_sp_create
                if ($pathinfo === '/gatb_sp/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_test_gatb_sp_create;
                    }

                    return array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\DefaultController::createAction',  '_route' => 'test_gatb_sp_create',);
                }
                not_test_gatb_sp_create:

                // test_gatb_sp_show
                if (preg_match('#^/gatb_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\DefaultController::showAction',));
                }

                // test_gatb_sp_next
                if (preg_match('#^/gatb_sp/(?P<id>[^/]++)/next$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_sp_next')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\DefaultController::nextAction',));
                }

                if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part')) {
                    if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part1_sp')) {
                        // test_gatb_part1_sp_new
                        if (preg_match('#^/gatb_sp/test_gatb_part1_sp/(?P<idgatbsp>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part1_sp_new')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart1SPController::newAction',));
                        }

                        // test_gatb_part1_sp_create
                        if (preg_match('#^/gatb_sp/test_gatb_part1_sp/(?P<idgatbsp>[^/]+)create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_test_gatb_part1_sp_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part1_sp_create')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart1SPController::createAction',));
                        }
                        not_test_gatb_part1_sp_create:

                        // test_gatb_part1_sp_show
                        if (preg_match('#^/gatb_sp/test_gatb_part1_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part1_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart1SPController::showAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part2_sp')) {
                        // test_gatb_part2_sp_new
                        if (preg_match('#^/gatb_sp/test_gatb_part2_sp/(?P<idgatbsp>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part2_sp_new')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart2SPController::newAction',));
                        }

                        // test_gatb_part2_sp_create
                        if (preg_match('#^/gatb_sp/test_gatb_part2_sp/(?P<idgatbsp>[^/]+)create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_test_gatb_part2_sp_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part2_sp_create')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart2SPController::createAction',));
                        }
                        not_test_gatb_part2_sp_create:

                        // test_gatb_part2_sp_show
                        if (preg_match('#^/gatb_sp/test_gatb_part2_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part2_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart2SPController::showAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part3_sp')) {
                        // test_gatb_part3_sp_new
                        if (preg_match('#^/gatb_sp/test_gatb_part3_sp/(?P<idgatbsp>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part3_sp_new')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart3SPController::newAction',));
                        }

                        // test_gatb_part3_sp_create
                        if (preg_match('#^/gatb_sp/test_gatb_part3_sp/(?P<idgatbsp>[^/]++)/create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_test_gatb_part3_sp_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part3_sp_create')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart3SPController::createAction',));
                        }
                        not_test_gatb_part3_sp_create:

                        // test_gatb_part3_sp_show
                        if (preg_match('#^/gatb_sp/test_gatb_part3_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part3_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart3SPController::showAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part4_sp')) {
                        // test_gatb_part4_sp_new
                        if (preg_match('#^/gatb_sp/test_gatb_part4_sp/(?P<idgatbsp>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part4_sp_new')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart4SPController::newAction',));
                        }

                        // test_gatb_part4_sp_create
                        if (preg_match('#^/gatb_sp/test_gatb_part4_sp/(?P<idgatbsp>[^/]++)/create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_test_gatb_part4_sp_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part4_sp_create')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart4SPController::createAction',));
                        }
                        not_test_gatb_part4_sp_create:

                        // test_gatb_part4_sp_show
                        if (preg_match('#^/gatb_sp/test_gatb_part4_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part4_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart4SPController::showAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/gatb_sp/test_gatb_part5_sp')) {
                        // test_gatb_part5_sp_new
                        if (preg_match('#^/gatb_sp/test_gatb_part5_sp/(?P<idgatbsp>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part5_sp_new')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart5SPController::newAction',));
                        }

                        // test_gatb_part5_sp_create
                        if (preg_match('#^/gatb_sp/test_gatb_part5_sp/(?P<idgatbsp>[^/]++)/create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_test_gatb_part5_sp_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part5_sp_create')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart5SPController::createAction',));
                        }
                        not_test_gatb_part5_sp_create:

                        // test_gatb_part5_sp_show
                        if (preg_match('#^/gatb_sp/test_gatb_part5_sp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_part5_sp_show')), array (  '_controller' => 'Jaxxes\\TestGatbSPBundle\\Controller\\GatbPart5SPController::showAction',));
                        }

                    }

                }

            }

            // test_gatb_homepage
            if (0 === strpos($pathinfo, '/gatb/hello') && preg_match('#^/gatb/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_gatb_homepage')), array (  '_controller' => 'Jaxxes\\TestGatbBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // definition_test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'definition_test_homepage')), array (  '_controller' => 'Jaxxes\\DefinitionTestBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // portada_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'portada_admin');
                }

                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::homeAdminAction',  '_route' => 'portada_admin',);
            }

            // admin_consultores
            if ($pathinfo === '/admin/home') {
                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::indexConsultoresAction',  '_route' => 'admin_consultores',);
            }

            // agregar_consulting
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::newConsultingAction',  '_route' => 'agregar_consulting',);
            }

            // consultant_edit
            if ($pathinfo === '/admin/edit') {
                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::editConsultingAction',  '_route' => 'consultant_edit',);
            }

            // backend_consultores
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_consultores');
                }

                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::indexConsultoresAction',  '_route' => 'backend_consultores',);
            }

            // backend_consultores_new
            if ($pathinfo === '/admin/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_backend_consultores_new;
                }

                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::newConsultingAction',  '_route' => 'backend_consultores_new',);
            }
            not_backend_consultores_new:

            // backend_consultores_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_backend_consultores_create;
                }

                return array (  '_controller' => 'Jaxxes\\GeneralBundle\\Controller\\DefaultController::createConsultingAction',  '_route' => 'backend_consultores_create',);
            }
            not_backend_consultores_create:

        }

        if (0 === strpos($pathinfo, '/enterprise')) {
            // enterprise_homepage
            if (rtrim($pathinfo, '/') === '/enterprise') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enterprise_homepage');
                }

                return array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'enterprise_homepage',);
            }

            // enterprise_new
            if ($pathinfo === '/enterprise/new') {
                return array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::newAction',  '_route' => 'enterprise_new',);
            }

            // enterprise_create
            if ($pathinfo === '/enterprise/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_enterprise_create;
                }

                return array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::createAction',  '_route' => 'enterprise_create',);
            }
            not_enterprise_create:

            // enterprise_show
            if (preg_match('#^/enterprise/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enterprise_show')), array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::showAction',));
            }

            // enterprise_edit
            if (preg_match('#^/enterprise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enterprise_edit')), array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::editAction',));
            }

            // enterprise_update
            if (preg_match('#^/enterprise/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_enterprise_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enterprise_update')), array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::updateAction',));
            }
            not_enterprise_update:

            // enterprise_delete
            if (preg_match('#^/enterprise/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_enterprise_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enterprise_delete')), array (  '_controller' => 'Jaxxes\\EnterpriseBundle\\Controller\\DefaultController::delete"Action',));
            }
            not_enterprise_delete:

        }

        if (0 === strpos($pathinfo, '/candidate')) {
            // candidate_bienvenida
            if ($pathinfo === '/candidate/sp/welcome') {
                return array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::welcomeAction',  '_route' => 'candidate_bienvenida',);
            }

            // pagina_ayuda
            if ($pathinfo === '/candidate/help') {
                return array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::helpAction',  '_route' => 'pagina_ayuda',);
            }

            // candidate_homepage
            if (rtrim($pathinfo, '/') === '/candidate') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidate_homepage');
                }

                return array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'candidate_homepage',);
            }

            // candidate_new
            if ($pathinfo === '/candidate/new') {
                return array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::newAction',  '_route' => 'candidate_new',);
            }

            // candidate_create
            if ($pathinfo === '/candidate/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidate_create;
                }

                return array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::createAction',  '_route' => 'candidate_create',);
            }
            not_candidate_create:

            // candidate_show
            if (preg_match('#^/candidate/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidate_show')), array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::showAction',));
            }

            // candidate_edit
            if (preg_match('#^/candidate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidate_edit')), array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::editAction',));
            }

            // candidate_update
            if (preg_match('#^/candidate/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidate_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidate_update')), array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::updateAction',));
            }
            not_candidate_update:

            // candidate_delete
            if (preg_match('#^/candidate/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidate_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidate_delete')), array (  '_controller' => 'Jaxxes\\CandidateBundle\\Controller\\DefaultController::deleteAction',));
            }
            not_candidate_delete:

        }

        // register_definition_rol_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_homepage')), array (  '_controller' => 'Jaxxes\\RegisterDefinitionRolBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/proceso')) {
            if (0 === strpos($pathinfo, '/proceso/sp_c')) {
                if (0 === strpos($pathinfo, '/proceso/sp_consultor')) {
                    // consultor_new
                    if ($pathinfo === '/proceso/sp_consultor/new') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::newAction',  '_route' => 'consultor_new',);
                    }

                    // consultor_portada
                    if ($pathinfo === '/proceso/sp_consultor') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'consultor_portada',);
                    }

                    // consultor_create
                    if ($pathinfo === '/proceso/sp_consultor/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_consultor_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::createAction',  '_route' => 'consultor_create',);
                    }
                    not_consultor_create:

                    // consultor_show
                    if (preg_match('#^/proceso/sp_consultor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultor_show')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::showAction',));
                    }

                    // consultor_edit
                    if (preg_match('#^/proceso/sp_consultor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultor_edit')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::editAction',));
                    }

                    // consultor_update
                    if (preg_match('#^/proceso/sp_consultor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_consultor_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultor_update')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::updateAction',));
                    }
                    not_consultor_update:

                    // consultor_delete
                    if (preg_match('#^/proceso/sp_consultor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_consultor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultor_delete')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::deleteAction',));
                    }
                    not_consultor_delete:

                }

                if (0 === strpos($pathinfo, '/proceso/sp_candidato')) {
                    // sp_candidato_new
                    if (preg_match('#^/proceso/sp_candidato/(?P<idselectionprocess>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_new')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateController::newAction',));
                    }

                    // sp_candidato_create
                    if (preg_match('#^/proceso/sp_candidato/(?P<idselectionprocess>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sp_candidato_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_create')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateController::createAction',));
                    }
                    not_sp_candidato_create:

                    // sp_candidato_show
                    if (preg_match('#^/proceso/sp_candidato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_show')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateController::showAction',));
                    }

                    // sp_candidato_edit
                    if (preg_match('#^/proceso/sp_candidato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_edit')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateController::editAction',));
                    }

                    // sp_candidato_update
                    if (preg_match('#^/proceso/sp_candidato/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sp_candidato_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_update')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateController::updateAction',));
                    }
                    not_sp_candidato_update:

                }

            }

            if (0 === strpos($pathinfo, '/proceso/consultor/log')) {
                if (0 === strpos($pathinfo, '/proceso/consultor/login')) {
                    // consultor_login
                    if ($pathinfo === '/proceso/consultor/login') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\AccessConsultantController::loginAction',  '_route' => 'consultor_login',);
                    }

                    // consultor_login_check
                    if ($pathinfo === '/proceso/consultor/login_check') {
                        return array('_route' => 'consultor_login_check');
                    }

                }

                // consultor_logout
                if ($pathinfo === '/proceso/consultor/logout') {
                    return array('_route' => 'consultor_logout');
                }

            }

            // index
            if (rtrim($pathinfo, '/') === '/proceso') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
            }

            if (0 === strpos($pathinfo, '/proceso/candidate/log')) {
                if (0 === strpos($pathinfo, '/proceso/candidate/login')) {
                    // candidate_login
                    if ($pathinfo === '/proceso/candidate/login') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\AccessCandidateController::loginAction',  '_route' => 'candidate_login',);
                    }

                    // candidate_login_check
                    if ($pathinfo === '/proceso/candidate/login_check') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\AccessCandidateController::welcomeAction',  '_route' => 'candidate_login_check',);
                    }

                }

                // candidate_logout
                if ($pathinfo === '/proceso/candidate/logout') {
                    return array('_route' => 'candidate_logout');
                }

            }

            // sp_candidato_createwelcome
            if ($pathinfo === '/proceso/sp_candidato/welcome') {
                return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\AccessCandidateController::configSaveAction',  '_route' => 'sp_candidato_createwelcome',);
            }

            if (0 === strpos($pathinfo, '/proceso/ResumePrivateCandidate')) {
                // resume_new
                if ($pathinfo === '/proceso/ResumePrivateCandidate/New') {
                    return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\FichaCandidatoController::ResumePrivateNewAction',  '_route' => 'resume_new',);
                }

                // resume_create
                if ($pathinfo === '/proceso/ResumePrivateCandidate/Create') {
                    return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\FichaCandidatoController::ResumePrivateCreateAction',  '_route' => 'resume_create',);
                }

                // resume_show
                if ($pathinfo === '/proceso/ResumePrivateCandidate/Show') {
                    return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\FichaCandidatoController::ResumePrivateShowAction',  '_route' => 'resume_show',);
                }

            }

            if (0 === strpos($pathinfo, '/proceso/sp_c')) {
                if (0 === strpos($pathinfo, '/proceso/sp_candidato/test')) {
                    // sp_candidato_test_index
                    if (rtrim($pathinfo, '/') === '/proceso/sp_candidato/test') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sp_candidato_test_index');
                        }

                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateTestController::indexAction',  '_route' => 'sp_candidato_test_index',);
                    }

                    // sp_candidato_test_show
                    if (preg_match('#^/proceso/sp_candidato/test/(?P<idspcandidate>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_test_show')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateTestController::showAction',));
                    }

                    // sp_candidato_test_make
                    if ($pathinfo === '/proceso/sp_candidato/test/make') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateTestController::makeAction',  '_route' => 'sp_candidato_test_make',);
                    }

                    // sp_candidato_test_next
                    if (preg_match('#^/proceso/sp_candidato/test/(?P<codetest>[^/]++)/next$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_test_next')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateTestController::nextAction',));
                    }

                    // sp_candidato_test_end
                    if ($pathinfo === '/proceso/sp_candidato/test/end') {
                        return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\SelectionProcessCandidateTestController::endAction',  '_route' => 'sp_candidato_test_end',);
                    }

                }

                if (0 === strpos($pathinfo, '/proceso/sp_consultor/result')) {
                    // sp_candidato_result_index
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id_spc>[^/]++)/index$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_index')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::indexAction',));
                    }

                    // sp_candidato_result_new
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id_spc>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_new')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::newAction',));
                    }

                    // sp_candidato_result_edit
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_edit')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::editAction',));
                    }

                    // sp_candidato_result_create
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id_spc>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sp_candidato_result_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_create')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::createAction',));
                    }
                    not_sp_candidato_result_create:

                    // sp_candidato_result_show
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_show')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::showAction',));
                    }

                    // sp_candidato_result_print
                    if (preg_match('#^/proceso/sp_consultor/result/(?P<id>[^/]++)/print$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sp_candidato_result_print')), array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\ResultSPCController::printAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/interview')) {
            // interview_new
            if ($pathinfo === '/interview/new') {
                return array (  '_controller' => 'Jaxxes\\VirtualInterviewBundle\\Controller\\EVCandidateController::newAction',  '_route' => 'interview_new',);
            }

            // interview_create
            if (preg_match('#^/interview/(?P<spc>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_interview_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'interview_create')), array (  '_controller' => 'Jaxxes\\VirtualInterviewBundle\\Controller\\EVCandidateController::createAction',));
            }
            not_interview_create:

            // interview_show
            if ($pathinfo === '/interview/show') {
                return array (  '_controller' => 'Jaxxes\\VirtualInterviewBundle\\Controller\\EVCandidateController::showAction',  '_route' => 'interview_show',);
            }

            // interview_edit
            if ($pathinfo === '/interview/edit') {
                return array (  '_controller' => 'Jaxxes\\VirtualInterviewBundle\\Controller\\EVCandidateController::editAction',  '_route' => 'interview_edit',);
            }

        }

        // resume_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resume_homepage')), array (  '_controller' => 'Jaxxes\\ResumeBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/rol')) {
            // rol_homepage
            if (rtrim($pathinfo, '/') === '/rol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol_homepage');
                }

                return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::indexAction',  '_route' => 'rol_homepage',);
            }

            // rol_new
            if ($pathinfo === '/rol/new') {
                return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::newAction',  '_route' => 'rol_new',);
            }

            // rol_create
            if ($pathinfo === '/rol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_show
            if (preg_match('#^/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::showAction',));
            }

            // rol_edit
            if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::editAction',));
            }

            // rol_update
            if (preg_match('#^/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::updateAction',));
            }
            not_rol_update:

            // rol_delete
            if (preg_match('#^/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\DefaultController::deleteAction',));
            }
            not_rol_delete:

            if (0 === strpos($pathinfo, '/rol/registerdefinitionrol')) {
                // register_definition_rol_new
                if (preg_match('#^/rol/registerdefinitionrol/(?P<idseleccionprocess>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::newAction',));
                }

                // register_definition_rol_create
                if ($pathinfo === '/rol/registerdefinitionrol/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_register_definition_rol_create;
                    }

                    return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::createAction',  '_route' => 'register_definition_rol_create',);
                }
                not_register_definition_rol_create:

                // register_definition_rol_show
                if (preg_match('#^/rol/registerdefinitionrol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::showAction',));
                }

                // register_definition_rol_since_select_edit
                if (preg_match('#^/rol/registerdefinitionrol/(?P<idseleccionprocess>[^/]++)/since_select_edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_since_select_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::since_select_editAction',));
                }

                // register_definition_rol_edit
                if (preg_match('#^/rol/registerdefinitionrol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::editAction',));
                }

                // register_definition_rol_update
                if (preg_match('#^/rol/registerdefinitionrol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_register_definition_rol_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_definition_rol_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::updateAction',));
                }
                not_register_definition_rol_update:

            }

            // register_definition_rol_perfilcargopostulante
            if ($pathinfo === '/rol/candidate/perfil') {
                return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RegisterDefinitionRolController::perfilcargopostulanteAction',  '_route' => 'register_definition_rol_perfilcargopostulante',);
            }

            if (0 === strpos($pathinfo, '/rol/rol_')) {
                if (0 === strpos($pathinfo, '/rol/rol_language')) {
                    // rol_language_new
                    if (preg_match('#^/rol/rol_language/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_language_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolLanguageController::newAction',));
                    }

                    // rol_language_create
                    if ($pathinfo === '/rol/rol_language/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_language_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolLanguageController::createAction',  '_route' => 'rol_language_create',);
                    }
                    not_rol_language_create:

                    // rol_language_show
                    if (preg_match('#^/rol/rol_language/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_language_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolLanguageController::showAction',));
                    }

                    // rol_language_edit
                    if (preg_match('#^/rol/rol_language/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_language_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolLanguageController::editAction',));
                    }

                    // rol_language_update
                    if (preg_match('#^/rol/rol_language/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_language_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_language_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolLanguageController::updateAction',));
                    }
                    not_rol_language_update:

                }

                if (0 === strpos($pathinfo, '/rol/rol_study_level')) {
                    // rol_study_level_new
                    if (preg_match('#^/rol/rol_study_level/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_study_level_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolStudyLevelController::newAction',));
                    }

                    // rol_study_level_create
                    if ($pathinfo === '/rol/rol_study_level/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_study_level_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolStudyLevelController::createAction',  '_route' => 'rol_study_level_create',);
                    }
                    not_rol_study_level_create:

                    // rol_study_level_show
                    if (preg_match('#^/rol/rol_study_level/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_study_level_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolStudyLevelController::showAction',));
                    }

                    // rol_study_level_edit
                    if (preg_match('#^/rol/rol_study_level/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_study_level_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolStudyLevelController::editAction',));
                    }

                    // rol_study_level_update
                    if (preg_match('#^/rol/rol_study_level/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_study_level_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_study_level_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolStudyLevelController::updateAction',));
                    }
                    not_rol_study_level_update:

                }

                if (0 === strpos($pathinfo, '/rol/rol_master')) {
                    // rol_master_new
                    if (preg_match('#^/rol/rol_master/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_master_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolMasterController::newAction',));
                    }

                    // rol_master_create
                    if ($pathinfo === '/rol/rol_master/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_master_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolMasterController::createAction',  '_route' => 'rol_master_create',);
                    }
                    not_rol_master_create:

                    // rol_master_show
                    if (preg_match('#^/rol/rol_master/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_master_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolMasterController::showAction',));
                    }

                    // rol_master_edit
                    if (preg_match('#^/rol/rol_master/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_master_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolMasterController::editAction',));
                    }

                    // rol_master_update
                    if (preg_match('#^/rol/rol_master/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_master_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_master_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolMasterController::updateAction',));
                    }
                    not_rol_master_update:

                }

                if (0 === strpos($pathinfo, '/rol/rol_personality')) {
                    // rol_personality_new
                    if (preg_match('#^/rol/rol_personality/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_personality_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolPersonalityController::newAction',));
                    }

                    // rol_personality_create
                    if ($pathinfo === '/rol/rol_personality/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_personality_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolPersonalityController::createAction',  '_route' => 'rol_personality_create',);
                    }
                    not_rol_personality_create:

                    // rol_personality_show
                    if (preg_match('#^/rol/rol_personality/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_personality_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolPersonalityController::showAction',));
                    }

                    // rol_personality_edit
                    if (preg_match('#^/rol/rol_personality/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_personality_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolPersonalityController::editAction',));
                    }

                    // rol_personality_update
                    if (preg_match('#^/rol/rol_personality/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_personality_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_personality_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolPersonalityController::updateAction',));
                    }
                    not_rol_personality_update:

                }

                if (0 === strpos($pathinfo, '/rol/rol_function')) {
                    // rol_function_new
                    if (preg_match('#^/rol/rol_function/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_function_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolFunctionController::newAction',));
                    }

                    // rol_function_create
                    if ($pathinfo === '/rol/rol_function/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_function_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolFunctionController::createAction',  '_route' => 'rol_function_create',);
                    }
                    not_rol_function_create:

                    // rol_function_show
                    if (preg_match('#^/rol/rol_function/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_function_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolFunctionController::showAction',));
                    }

                    // rol_function_edit
                    if (preg_match('#^/rol/rol_function/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_function_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolFunctionController::editAction',));
                    }

                    // rol_function_update
                    if (preg_match('#^/rol/rol_function/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_function_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_function_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolFunctionController::updateAction',));
                    }
                    not_rol_function_update:

                }

                if (0 === strpos($pathinfo, '/rol/rol_detail')) {
                    // rol_detail_new
                    if (preg_match('#^/rol/rol_detail/(?P<idregisterdefinitionrol>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_detail_new')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolDetailController::newAction',));
                    }

                    // rol_detail_create
                    if ($pathinfo === '/rol/rol_detail/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_detail_create;
                        }

                        return array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolDetailController::createAction',  '_route' => 'rol_detail_create',);
                    }
                    not_rol_detail_create:

                    // rol_detail_show
                    if (preg_match('#^/rol/rol_detail/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_detail_show')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolDetailController::showAction',));
                    }

                    // rol_detail_edit
                    if (preg_match('#^/rol/rol_detail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_detail_edit')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolDetailController::editAction',));
                    }

                    // rol_detail_update
                    if (preg_match('#^/rol/rol_detail/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rol_detail_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_detail_update')), array (  '_controller' => 'Jaxxes\\RolBundle\\Controller\\RolDetailController::updateAction',));
                    }
                    not_rol_detail_update:

                }

            }

        }

        if (0 === strpos($pathinfo, '/nivel')) {
            // nivel_homepage
            if (rtrim($pathinfo, '/') === '/nivel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nivel_homepage');
                }

                return array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nivel_homepage',);
            }

            // nivel_new
            if ($pathinfo === '/nivel/new') {
                return array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::newAction',  '_route' => 'nivel_new',);
            }

            // nivel_create
            if ($pathinfo === '/nivel/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nivel_create;
                }

                return array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::createAction',  '_route' => 'nivel_create',);
            }
            not_nivel_create:

            // nivel_show
            if (preg_match('#^/nivel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nivel_show')), array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::showAction',));
            }

            // nivel_edit
            if (preg_match('#^/nivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nivel_edit')), array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::editAction',));
            }

            // nivel_update
            if (preg_match('#^/nivel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nivel_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nivel_update')), array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::updateAction',));
            }
            not_nivel_update:

            // nivel_delete
            if (preg_match('#^/nivel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nivel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nivel_delete')), array (  '_controller' => 'Jaxxes\\NivelBundle\\Controller\\DefaultController::deleteAction',));
            }
            not_nivel_delete:

        }

        // Home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Home');
            }

            return array (  '_controller' => 'Jaxxes\\SeleccionProcesBundle\\Controller\\AccessCandidateController::loginAction',  '_route' => 'Home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
