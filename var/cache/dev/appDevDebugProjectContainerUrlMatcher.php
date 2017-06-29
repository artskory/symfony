<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // oc_platform
        if ('/annonce' === $pathinfo) {
            return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'oc_platform',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog
            if (preg_match('#^/blog(?:/(?P<p>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog')), array (  'p' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // archives_blog
                if (0 === strpos($pathinfo, '/blog/archives') && preg_match('#^/blog/archives/(?P<year>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'archives_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::ArchivesAction',));
                }

                if (0 === strpos($pathinfo, '/blog/ajouter')) {
                    // ajouter_commentaire_blog
                    if (0 === strpos($pathinfo, '/blog/ajouter_commentaire_blog') && preg_match('#^/blog/ajouter_commentaire_blog/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_ajouter_commentaire_blog;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_commentaire_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterCommentaireAction',));
                    }
                    not_ajouter_commentaire_blog:

                    // ajouter
                    if ('/blog/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'ajouter',);
                    }

                }

                // ajax_commentaire_blog
                if ('/blog/ajax_commentaire_blog' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterAjaxCommentaireAction',  '_route' => 'ajax_commentaire_blog',);
                }

            }

            // detail_blog
            if (0 === strpos($pathinfo, '/blog/detail') && preg_match('#^/blog/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::detailAction',));
            }

            // tag_blog
            if (0 === strpos($pathinfo, '/blog/tag') && preg_match('#^/blog/tag/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::tagAction',));
            }

            // modifier_blog
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::modifierAction',));
            }

            // supprimer_blog
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::supprimerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/catalogue')) {
            // catalogue
            if ('/catalogue' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'catalogue');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CatalogueController::indexAction',  '_route' => 'catalogue',);
            }

            // categorie_catalogue
            if (0 === strpos($pathinfo, '/catalogue/categorie') && preg_match('#^/catalogue/categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_catalogue')), array (  '_controller' => 'AppBundle\\Controller\\CatalogueController::categorieAction',));
            }

            // detail_catalogue
            if (0 === strpos($pathinfo, '/catalogue/detail') && preg_match('#^/catalogue/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_catalogue')), array (  '_controller' => 'AppBundle\\Controller\\CatalogueController::detailAction',));
            }

            // ajax_note_produit
            if ('/catalogue/ajax_note_produit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogueController::ajouterAjaxNoteAction',  '_route' => 'ajax_note_produit',);
            }

            // ajax_new_prod
            if ('/catalogue/ajax_new_prod' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogueController::ajaxNewProd',  '_route' => 'ajax_new_prod',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
