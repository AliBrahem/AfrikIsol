<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // admin_homepage
        if ($pathinfo === '/indexSUPAD') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_homepage',);
        }

        if (0 === strpos($pathinfo, '/chart')) {
            // admin_graphe
            if (0 === strpos($pathinfo, '/chartLine') && preg_match('#^/chartLine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_graphe')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::chartLineAction',));
            }

            if (0 === strpos($pathinfo, '/chartGantt')) {
                // admin_gantt
                if (preg_match('#^/chartGantt/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gantt')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::chartGanttAction',));
                }

                // admin_ganttJ
                if (0 === strpos($pathinfo, '/chartGanttJ') && preg_match('#^/chartGanttJ/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ganttJ')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::chartGanttJAction',));
                }

            }

        }

        // admin_grapheSuivie
        if (0 === strpos($pathinfo, '/suivieChart') && preg_match('#^/suivieChart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_grapheSuivie')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::suivieChartAction',));
        }

        if (0 === strpos($pathinfo, '/upd')) {
            // admin_updateprofile
            if ($pathinfo === '/updateProfile') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::updateAction',  '_route' => 'admin_updateprofile',);
            }

            // admin_updateOtherUser
            if (0 === strpos($pathinfo, '/updOtherUser') && preg_match('#^/updOtherUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updateOtherUser')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::updateOtherAction',));
            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            // admin_afficheprofile
            if ($pathinfo === '/displayProfile') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::afficheAction',  '_route' => 'admin_afficheprofile',);
            }

            // admin_supprimeruser
            if (0 === strpos($pathinfo, '/deleteUser') && preg_match('#^/deleteUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supprimeruser')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::deleteAction',));
            }

        }

        // admin_listerUser
        if ($pathinfo === '/listerUsers') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\UserController::listerAction',  '_route' => 'admin_listerUser',);
        }

        // tech_calculTole
        if (0 === strpos($pathinfo, '/calculTole') && preg_match('#^/calculTole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_calculTole')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::calculToleAction',));
        }

        if (0 === strpos($pathinfo, '/list')) {
            // tech_listerTole
            if (0 === strpos($pathinfo, '/listerTole') && preg_match('#^/listerTole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_listerTole')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerToleAction',));
            }

            // tech_listProjet
            if ($pathinfo === '/listProjet') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerProjetAction',  '_route' => 'tech_listProjet',);
            }

            // tech_listAvancement
            if ($pathinfo === '/listAvancement') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerAvancementAction',  '_route' => 'tech_listAvancement',);
            }

            // tech_listPlan
            if ($pathinfo === '/listPlanification') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerPlanificationAction',  '_route' => 'tech_listPlan',);
            }

            // tech_listGantt
            if ($pathinfo === '/listGantt') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerGanttAction',  '_route' => 'tech_listGantt',);
            }

        }

        // tech_findTole
        if (0 === strpos($pathinfo, '/findTole') && preg_match('#^/findTole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_findTole')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::findToleAction',));
        }

        // tech_listMAD
        if ($pathinfo === '/listMAD') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerMADAction',  '_route' => 'tech_listMAD',);
        }

        if (0 === strpos($pathinfo, '/add')) {
            // tech_addProjet
            if ($pathinfo === '/addProjet') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addProjetAction',  '_route' => 'tech_addProjet',);
            }

            // tech_addClient
            if ($pathinfo === '/addClient') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addClientAction',  '_route' => 'tech_addClient',);
            }

        }

        if (0 === strpos($pathinfo, '/list')) {
            // tech_listClient
            if ($pathinfo === '/listClient') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listerClientAction',  '_route' => 'tech_listClient',);
            }

            // tech_listTole
            if ($pathinfo === '/listTole') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::listToleAction',  '_route' => 'tech_listTole',);
            }

        }

        if (0 === strpos($pathinfo, '/add')) {
            // tech_addAvancement
            if (0 === strpos($pathinfo, '/addAvancement') && preg_match('#^/addAvancement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_addAvancement')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addAvancementAction',));
            }

            // tech_addGantt
            if (0 === strpos($pathinfo, '/addGantt') && preg_match('#^/addGantt/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_addGantt')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addGanttAction',));
            }

            // tech_addPlanification
            if (0 === strpos($pathinfo, '/addPlanification') && preg_match('#^/addPlanification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_addPlanification')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addPlanAction',));
            }

            // tech_addMAD
            if (0 === strpos($pathinfo, '/addMAD') && preg_match('#^/addMAD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_addMAD')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::addMADAction',));
            }

        }

        // tech_genererPDFTUYAUTERIES
        if ($pathinfo === '/genererPDFTube') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::generatePdfTubeAction',  '_route' => 'tech_genererPDFTUYAUTERIES',);
        }

        // tech_index
        if ($pathinfo === '/indexTech') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::indexAction',  '_route' => 'tech_index',);
        }

        if (0 === strpos($pathinfo, '/upd')) {
            // tech_updTole
            if (0 === strpos($pathinfo, '/updTole') && preg_match('#^/updTole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_updTole')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::updateToleAction',));
            }

            // tech_updProjet
            if (0 === strpos($pathinfo, '/updProjet') && preg_match('#^/updProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_updProjet')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::updateProjetAction',));
            }

            // tech_updClient
            if (0 === strpos($pathinfo, '/updClient') && preg_match('#^/updClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tech_updClient')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\TechController::updateClientAction',));
            }

        }

        // log_index
        if ($pathinfo === '/indexLog') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::indexAction',  '_route' => 'log_index',);
        }

        // log_addStock
        if ($pathinfo === '/addStock') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::addStockAction',  '_route' => 'log_addStock',);
        }

        // log_listStock
        if ($pathinfo === '/listStock') {
            return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::listStockAction',  '_route' => 'log_listStock',);
        }

        // log_addMvt
        if (0 === strpos($pathinfo, '/addMvt') && preg_match('#^/addMvt/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_addMvt')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::addMvtAction',));
        }

        if (0 === strpos($pathinfo, '/list')) {
            // log_listMvt
            if (0 === strpos($pathinfo, '/listMvt') && preg_match('#^/listMvt/(?P<idstock>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_listMvt')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::listMvtAction',));
            }

            // log_listAllMvt
            if ($pathinfo === '/listAllMvt') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::listAllMvtAction',  '_route' => 'log_listAllMvt',);
            }

            // log_listDmd
            if ($pathinfo === '/listDmd') {
                return array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::listDmdAction',  '_route' => 'log_listDmd',);
            }

        }

        // log_updDmd
        if (0 === strpos($pathinfo, '/updDmd') && preg_match('#^/updDmd/(?P<id>[^/]++)/(?P<q>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_updDmd')), array (  '_controller' => 'BackOffice\\AdminBundle\\Controller\\LogController::updateDmdAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
