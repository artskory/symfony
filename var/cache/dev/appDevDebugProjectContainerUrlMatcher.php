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

        // blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog(?:/(?P<p>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog')), array (  '_locale' => 'fr',  'p' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',));
        }

        // archives_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/archives/(?P<year>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'archives_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::ArchivesAction',));
        }

        // detail_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/detail/(?P<slug>[a-zA-Z1-9\\-_/]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::detailAction',));
        }

        // ajouter_commentaire_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/ajouter_commentaire_blog/(?P<slug>[a-zA-Z1-9\\-_/]+)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_ajouter_commentaire_blog;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_commentaire_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterCommentaireAction',));
        }
        not_ajouter_commentaire_blog:

        // ajax_commentaire_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/ajax_commentaire_blog$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_commentaire_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterAjaxCommentaireAction',));
        }

        // ajouter
        if (preg_match('#^/(?P<_locale>fr|en)/blog/ajouter$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterAction',));
        }

        // tag_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/tag/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::tagAction',));
        }

        // modifier_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/modifier/(?P<slug>[a-zA-Z1-9\\-_/]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::modifierAction',));
        }

        // supprimer_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::supprimerAction',));
        }

        // trad_blog
        if (preg_match('#^/(?P<_locale>fr|en)/blog/traduction$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trad_blog')), array (  '_locale' => 'fr',  '_controller' => 'AppBundle\\Controller\\BlogController::traductionAction',));
        }

        if (0 === strpos($pathinfo, '/catalogue')) {
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

        if (0 === strpos($pathinfo, '/admin/tag')) {
            // admin_tag_index
            if ('/admin/tag' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_tag_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_tag_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::indexAction',  '_route' => 'admin_tag_index',);
            }
            not_admin_tag_index:

            // admin_tag_new
            if ('/admin/tag/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_tag_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::newAction',  '_route' => 'admin_tag_new',);
            }
            not_admin_tag_new:

            // admin_tag_show
            if (preg_match('#^/admin/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_tag_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_show')), array (  '_controller' => 'AppBundle\\Controller\\TagController::showAction',));
            }
            not_admin_tag_show:

            // admin_tag_edit
            if (preg_match('#^/admin/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_tag_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_edit')), array (  '_controller' => 'AppBundle\\Controller\\TagController::editAction',));
            }
            not_admin_tag_edit:

            // admin_tag_delete
            if (preg_match('#^/admin/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_admin_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_delete')), array (  '_controller' => 'AppBundle\\Controller\\TagController::deleteAction',));
            }
            not_admin_tag_delete:

        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>fr|en)/login$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>fr|en)/login_check$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>fr|en)/logout$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',));
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>fr|en)/profile/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'fr',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>fr|en)/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_profile_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'fr',));
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>fr|en)/register/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>fr|en)/register/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>fr|en)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>fr|en)/register/confirmed$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'fr',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/request$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>fr|en)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'fr',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>fr|en)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'fr',));
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
