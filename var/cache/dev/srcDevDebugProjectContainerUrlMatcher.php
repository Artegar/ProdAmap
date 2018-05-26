<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            // accueil
            if ('/accueil' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AccueilController::index',  '_route' => 'accueil',);
            }

            if (0 === strpos($pathinfo, '/adherant')) {
                // adherant_index
                if ('/adherant' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\AdherantController::index',  '_route' => 'adherant_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_adherant_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'adherant_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_adherant_index;
                    }

                    return $ret;
                }
                not_adherant_index:

                // adherant_new
                if ('/adherant/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\AdherantController::new',  '_route' => 'adherant_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adherant_new;
                    }

                    return $ret;
                }
                not_adherant_new:

                // adherant_show
                if (preg_match('#^/adherant/(?P<adherId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'adherant_show')), array (  '_controller' => 'App\\Controller\\AdherantController::show',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_adherant_show;
                    }

                    return $ret;
                }
                not_adherant_show:

                // adherant_edit
                if (preg_match('#^/adherant/(?P<adherId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'adherant_edit')), array (  '_controller' => 'App\\Controller\\AdherantController::edit',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adherant_edit;
                    }

                    return $ret;
                }
                not_adherant_edit:

                // adherant_delete
                if (preg_match('#^/adherant/(?P<adherId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'adherant_delete')), array (  '_controller' => 'App\\Controller\\AdherantController::delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_adherant_delete;
                    }

                    return $ret;
                }
                not_adherant_delete:

            }

            elseif (0 === strpos($pathinfo, '/amap')) {
                // amap_index
                if ('/amap' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\AmapController::index',  '_route' => 'amap_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_amap_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'amap_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_amap_index;
                    }

                    return $ret;
                }
                not_amap_index:

                // amap_new
                if ('/amap/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\AmapController::new',  '_route' => 'amap_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_amap_new;
                    }

                    return $ret;
                }
                not_amap_new:

                // amap_show
                if (preg_match('#^/amap/(?P<amapId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'amap_show')), array (  '_controller' => 'App\\Controller\\AmapController::show',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_amap_show;
                    }

                    return $ret;
                }
                not_amap_show:

                // amap_edit
                if (preg_match('#^/amap/(?P<amapId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'amap_edit')), array (  '_controller' => 'App\\Controller\\AmapController::edit',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_amap_edit;
                    }

                    return $ret;
                }
                not_amap_edit:

                // amap_delete
                if (preg_match('#^/amap/(?P<amapId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'amap_delete')), array (  '_controller' => 'App\\Controller\\AmapController::delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_amap_delete;
                    }

                    return $ret;
                }
                not_amap_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/contrat')) {
            // contrat_index
            if ('/contrat' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ContratController::index',  '_route' => 'contrat_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_contrat_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contrat_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_contrat_index;
                }

                return $ret;
            }
            not_contrat_index:

            // contrat_new
            if ('/contrat/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ContratController::new',  '_route' => 'contrat_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_contrat_new;
                }

                return $ret;
            }
            not_contrat_new:

            // contrat_show
            if (preg_match('#^/contrat/(?P<contId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_show')), array (  '_controller' => 'App\\Controller\\ContratController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_contrat_show;
                }

                return $ret;
            }
            not_contrat_show:

            // contrat_edit
            if (preg_match('#^/contrat/(?P<contId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_edit')), array (  '_controller' => 'App\\Controller\\ContratController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_contrat_edit;
                }

                return $ret;
            }
            not_contrat_edit:

            // contrat_delete
            if (preg_match('#^/contrat/(?P<contId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_delete')), array (  '_controller' => 'App\\Controller\\ContratController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_contrat_delete;
                }

                return $ret;
            }
            not_contrat_delete:

        }

        elseif (0 === strpos($pathinfo, '/famille')) {
            // famille_index
            if ('/famille' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\FamilleController::index',  '_route' => 'famille_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_famille_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'famille_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_famille_index;
                }

                return $ret;
            }
            not_famille_index:

            // famille_new
            if ('/famille/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\FamilleController::new',  '_route' => 'famille_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_famille_new;
                }

                return $ret;
            }
            not_famille_new:

            // famille_show
            if (preg_match('#^/famille/(?P<famId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_show')), array (  '_controller' => 'App\\Controller\\FamilleController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_famille_show;
                }

                return $ret;
            }
            not_famille_show:

            // famille_edit
            if (preg_match('#^/famille/(?P<famId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_edit')), array (  '_controller' => 'App\\Controller\\FamilleController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_famille_edit;
                }

                return $ret;
            }
            not_famille_edit:

            // famille_delete
            if (preg_match('#^/famille/(?P<famId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_delete')), array (  '_controller' => 'App\\Controller\\FamilleController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_famille_delete;
                }

                return $ret;
            }
            not_famille_delete:

        }

        // inscription
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\InscriptionController::index',  '_route' => 'inscription',);
        }

        // nos_producteurs
        if ('/nosproducteurs' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\NosProducteursController::index',  '_route' => 'nos_producteurs',);
        }

        // notre_histoire
        if ('/notrehistoire' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\NotreHistoireController::index',  '_route' => 'notre_histoire',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panier')) {
                // panier_index
                if ('/panier' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\PanierController::index',  '_route' => 'panier_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_panier_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'panier_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_panier_index;
                    }

                    return $ret;
                }
                not_panier_index:

                // panier_new
                if ('/panier/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\PanierController::new',  '_route' => 'panier_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_panier_new;
                    }

                    return $ret;
                }
                not_panier_new:

                // panier_show
                if (preg_match('#^/panier/(?P<panierId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_show')), array (  '_controller' => 'App\\Controller\\PanierController::show',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_panier_show;
                    }

                    return $ret;
                }
                not_panier_show:

                // panier_edit
                if (preg_match('#^/panier/(?P<panierId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_edit')), array (  '_controller' => 'App\\Controller\\PanierController::edit',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_panier_edit;
                    }

                    return $ret;
                }
                not_panier_edit:

                // panier_delete
                if (preg_match('#^/panier/(?P<panierId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_delete')), array (  '_controller' => 'App\\Controller\\PanierController::delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_panier_delete;
                    }

                    return $ret;
                }
                not_panier_delete:

            }

            elseif (0 === strpos($pathinfo, '/producteur')) {
                // producteur_index
                if ('/producteur' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ProducteurController::index',  '_route' => 'producteur_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_producteur_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'producteur_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_producteur_index;
                    }

                    return $ret;
                }
                not_producteur_index:

                // producteur_new
                if ('/producteur/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ProducteurController::new',  '_route' => 'producteur_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_producteur_new;
                    }

                    return $ret;
                }
                not_producteur_new:

                // producteur_show
                if (preg_match('#^/producteur/(?P<prodId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'producteur_show')), array (  '_controller' => 'App\\Controller\\ProducteurController::show',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_producteur_show;
                    }

                    return $ret;
                }
                not_producteur_show:

                // producteur_edit
                if (preg_match('#^/producteur/(?P<prodId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'producteur_edit')), array (  '_controller' => 'App\\Controller\\ProducteurController::edit',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_producteur_edit;
                    }

                    return $ret;
                }
                not_producteur_edit:

                // producteur_delete
                if (preg_match('#^/producteur/(?P<prodId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'producteur_delete')), array (  '_controller' => 'App\\Controller\\ProducteurController::delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_producteur_delete;
                    }

                    return $ret;
                }
                not_producteur_delete:

            }

            elseif (0 === strpos($pathinfo, '/produit')) {
                // produit_index
                if ('/produit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ProduitController::index',  '_route' => 'produit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_produit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_produit_index;
                    }

                    return $ret;
                }
                not_produit_index:

                // produit_new
                if ('/produit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ProduitController::new',  '_route' => 'produit_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_produit_new;
                    }

                    return $ret;
                }
                not_produit_new:

                // produit_show
                if (preg_match('#^/produit/(?P<produitId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'App\\Controller\\ProduitController::show',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_produit_show;
                    }

                    return $ret;
                }
                not_produit_show:

                // produit_edit
                if (preg_match('#^/produit/(?P<produitId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'App\\Controller\\ProduitController::edit',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_produit_edit;
                    }

                    return $ret;
                }
                not_produit_edit:

                // produit_delete
                if (preg_match('#^/produit/(?P<produitId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'App\\Controller\\ProduitController::delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_produit_delete;
                    }

                    return $ret;
                }
                not_produit_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if ('/utilisateur' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\UtilisateurController::index',  '_route' => 'utilisateur_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_utilisateur_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'utilisateur_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_utilisateur_index;
                }

                return $ret;
            }
            not_utilisateur_index:

            // utilisateur_new
            if ('/utilisateur/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\UtilisateurController::new',  '_route' => 'utilisateur_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_utilisateur_new;
                }

                return $ret;
            }
            not_utilisateur_new:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<utilId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'App\\Controller\\UtilisateurController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_utilisateur_show;
                }

                return $ret;
            }
            not_utilisateur_show:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<utilId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'App\\Controller\\UtilisateurController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_utilisateur_edit;
                }

                return $ret;
            }
            not_utilisateur_edit:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<utilId>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'App\\Controller\\UtilisateurController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_utilisateur_delete;
                }

                return $ret;
            }
            not_utilisateur_delete:

        }

        // app_lucky_number
        if ('/lucky/number' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\LuckyController::number',  '_route' => 'app_lucky_number',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
