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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        // MYTICKETS
        if ($pathinfo === '/MYTICKETS') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_MYTICKETS;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\APIController::MYTICKETS',  '_route' => 'MYTICKETS',);
        }
        not_MYTICKETS:

        // APIALLTICKETS
        if ($pathinfo === '/AllTickets.json') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_APIALLTICKETS;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\APIController::indexAction',  '_route' => 'APIALLTICKETS',);
        }
        not_APIALLTICKETS:

        // app_api_getsearchresults
        if (0 === strpos($pathinfo, '/Search') && preg_match('#^/Search/(?P<word>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_api_getsearchresults;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_getsearchresults')), array (  '_controller' => 'AppBundle\\Controller\\APIController::getSearchResults',));
        }
        not_app_api_getsearchresults:

        // app_api_getcarbyid
        if (0 === strpos($pathinfo, '/Car') && preg_match('#^/Car/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_api_getcarbyid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_getcarbyid')), array (  '_controller' => 'AppBundle\\Controller\\APIController::getCarById',));
        }
        not_app_api_getcarbyid:

        // app_api_gettechbyid
        if (0 === strpos($pathinfo, '/TS') && preg_match('#^/TS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_api_gettechbyid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_gettechbyid')), array (  '_controller' => 'AppBundle\\Controller\\APIController::getTechById',));
        }
        not_app_api_gettechbyid:

        // app_api_getuserbyid
        if (0 === strpos($pathinfo, '/USER') && preg_match('#^/USER/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_api_getuserbyid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_getuserbyid')), array (  '_controller' => 'AppBundle\\Controller\\APIController::getUSERById',));
        }
        not_app_api_getuserbyid:

        // app_api_login
        if ($pathinfo === '/LoginAPI') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_app_api_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\APIController::Login',  '_route' => 'app_api_login',);
        }
        not_app_api_login:

        if (0 === strpos($pathinfo, '/New')) {
            // app_api_search
            if ($pathinfo === '/NewTicketAPI') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_api_search;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\APIController::search',  '_route' => 'app_api_search',);
            }
            not_app_api_search:

            // app_api_newuserapi
            if ($pathinfo === '/NewUserAPI') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_api_newuserapi;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\APIController::NewUSERAPI',  '_route' => 'app_api_newuserapi',);
            }
            not_app_api_newuserapi:

        }

        // app_api_delticket
        if ($pathinfo === '/DELTICKET') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_app_api_delticket;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\APIController::DelTicket',  '_route' => 'app_api_delticket',);
        }
        not_app_api_delticket:

        if (0 === strpos($pathinfo, '/A')) {
            if (0 === strpos($pathinfo, '/Admin')) {
                // admin_dashboard
                if ($pathinfo === '/Admin/Dashboard') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::indexAction',  '_route' => 'admin_dashboard',);
                }

                // admin_params
                if ($pathinfo === '/Admin/Params') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::GetAllparameters',  '_route' => 'admin_params',);
                }

                // admin_new_manuf
                if ($pathinfo === '/Admin/AddManuf') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::AddConstructor',  '_route' => 'admin_new_manuf',);
                }

                // admin_delete_manuf
                if (0 === strpos($pathinfo, '/Admin/DeleteManuf') && preg_match('#^/Admin/DeleteManuf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_manuf')), array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::DeleteConstructor',));
                }

                // admin_site_params
                if ($pathinfo === '/Admin/SiteParams') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::SiteParams',  '_route' => 'admin_site_params',);
                }

                // admin_new_notification
                if ($pathinfo === '/Admin/AddNotifications') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::AddNotification',  '_route' => 'admin_new_notification',);
                }

            }

            // admin_delete_notification
            if (0 === strpos($pathinfo, '/Aamin/DeleteNotification') && preg_match('#^/Aamin/DeleteNotification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_notification')), array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::DeleteNotification',));
            }

            // admin_update_argus
            if ($pathinfo === '/ArgusParams') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminDashboardController::UpdateArgusParams',  '_route' => 'admin_update_argus',);
            }

            if (0 === strpos($pathinfo, '/Admin')) {
                if (0 === strpos($pathinfo, '/Admin/Car')) {
                    // car_list
                    if ($pathinfo === '/Admin/CarsList') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminEditCarController::GetCarList',  '_route' => 'car_list',);
                    }

                    // delete_car
                    if (preg_match('#^/Admin/Car/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_car')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditCarController::DeleteCar',));
                    }

                }

                if (0 === strpos($pathinfo, '/Admin/Ticket')) {
                    // Admin_edit_ticket
                    if (preg_match('#^/Admin/Ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_edit_ticket')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::EditUser',));
                    }

                    // Admin_ticket_list
                    if ($pathinfo === '/Admin/TicketsList') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::GetUserList',  '_route' => 'Admin_ticket_list',);
                    }

                    // Admin_delete_ticket
                    if (preg_match('#^/Admin/Ticket/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_delete_ticket')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::DeleteTicket',));
                    }

                }

                // admin_new_ticket
                if ($pathinfo === '/Admin/newTicket') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::AdminAddUser',  '_route' => 'admin_new_ticket',);
                }

            }

            // approve
            if (0 === strpos($pathinfo, '/Approve') && preg_match('#^/Approve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'approve')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::AdminAproveTicket',));
            }

        }

        // disapprove
        if (0 === strpos($pathinfo, '/DisApprove') && preg_match('#^/DisApprove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'disapprove')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::AdmindisAproveTicket',));
        }

        // approveD
        if (0 === strpos($pathinfo, '/ApproveD') && preg_match('#^/ApproveD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'approveD')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::AdminAproveTicketD',));
        }

        // disapproveD
        if (0 === strpos($pathinfo, '/DisApproveD') && preg_match('#^/DisApproveD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'disapproveD')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::AdmindisAproveTicketD',));
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // Admin_delete_ticketD
            if (0 === strpos($pathinfo, '/Admin/Ticket') && preg_match('#^/Admin/Ticket/(?P<id>[^/]++)/deleteD$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_delete_ticketD')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::DeleteTicketD',));
            }

            // admin_aprove_all
            if ($pathinfo === '/Admin/ApproveAll') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminEditTicketController::ApproveAll',  '_route' => 'admin_aprove_all',);
            }

            if (0 === strpos($pathinfo, '/Admin/User')) {
                // edit_user
                if (preg_match('#^/Admin/User/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditUSerController::EditUser',));
                }

                // users_list
                if ($pathinfo === '/Admin/UsersList') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminEditUSerController::GetUserList',  '_route' => 'users_list',);
                }

                // delete_user
                if (preg_match('#^/Admin/User/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminEditUSerController::DeleteUser',));
                }

            }

            if (0 === strpos($pathinfo, '/Admin/new')) {
                // admin_new_user
                if ($pathinfo === '/Admin/newUser') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminEditUSerController::AdminAddUser',  '_route' => 'admin_new_user',);
                }

                // admin_new_admin
                if ($pathinfo === '/Admin/newAdmin') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminEditUSerController::AdminAddAdmin',  '_route' => 'admin_new_admin',);
                }

            }

        }

        // all_user_ticket
        if ($pathinfo === '/MyTickets') {
            return array (  '_controller' => 'AppBundle\\Controller\\CheckAllTicketsController::getTicket',  '_route' => 'all_user_ticket',);
        }

        if (0 === strpos($pathinfo, '/Car')) {
            // check_car
            if (preg_match('#^/Car/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'check_car')), array (  '_controller' => 'AppBundle\\Controller\\CheckCarController::getCar',));
            }

            // user_car_delete
            if (preg_match('#^/Car/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_car_delete')), array (  '_controller' => 'AppBundle\\Controller\\CheckCarController::deleteCar',));
            }

        }

        if (0 === strpos($pathinfo, '/User')) {
            // user_profile
            if (preg_match('#^/User/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  '_controller' => 'AppBundle\\Controller\\CheckProfileController::getUserProfile',));
            }

            // user_profile_remove
            if (preg_match('#^/User/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile_remove')), array (  '_controller' => 'AppBundle\\Controller\\CheckProfileController::deleteUserProfile',));
            }

        }

        // my_profile
        if ($pathinfo === '/MyProfile') {
            return array (  '_controller' => 'AppBundle\\Controller\\CheckProfileController::getProfile',  '_route' => 'my_profile',);
        }

        if (0 === strpos($pathinfo, '/Sheet')) {
            // user_tech_sheet
            if (preg_match('#^/Sheet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_tech_sheet')), array (  '_controller' => 'AppBundle\\Controller\\CheckTechSheetController::getTicket',));
            }

            // user_tech_sheet_remove
            if (preg_match('#^/Sheet/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_tech_sheet_remove')), array (  '_controller' => 'AppBundle\\Controller\\CheckTechSheetController::removeTicket',));
            }

        }

        if (0 === strpos($pathinfo, '/Ticket')) {
            // user_ticket
            if (preg_match('#^/Ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_ticket')), array (  '_controller' => 'AppBundle\\Controller\\CheckTicketController::getTicket',));
            }

            // user_ticket_edit
            if (preg_match('#^/Ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_ticket_edit')), array (  '_controller' => 'AppBundle\\Controller\\CheckTicketController::editTicket',));
            }

            // user_ticket_remove
            if (preg_match('#^/Ticket/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_ticket_remove')), array (  '_controller' => 'AppBundle\\Controller\\CheckTicketController::removeTicket',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // Home_page
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::Homepage',  '_route' => 'Home_page',);
        }

        // search
        if ($pathinfo === '/Search') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::SearchResults',  '_route' => 'search',);
        }

        // deep_search
        if ($pathinfo === '/DeepSearch') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomePageController::DeepSearchResults',  '_route' => 'deep_search',);
        }

        // new_car
        if ($pathinfo === '/newCar') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewCarController::NewCar',  '_route' => 'new_car',);
        }

        if (0 === strpos($pathinfo, '/C')) {
            // edit_car
            if (0 === strpos($pathinfo, '/Car') && preg_match('#^/Car/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_car')), array (  '_controller' => 'AppBundle\\Controller\\NewCarController::EditCar',));
            }

            // user_car_compare
            if ($pathinfo === '/Compare') {
                return array (  '_controller' => 'AppBundle\\Controller\\NewCarrCompareController::Compare',  '_route' => 'user_car_compare',);
            }

        }

        // new_sheet
        if ($pathinfo === '/newSheet') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewTechSheetController::NewTechSheetController',  '_route' => 'new_sheet',);
        }

        // user_edit_sheet
        if (0 === strpos($pathinfo, '/Sheet') && preg_match('#^/Sheet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit_sheet')), array (  '_controller' => 'AppBundle\\Controller\\NewTechSheetController::EditTechSheetController',));
        }

        if (0 === strpos($pathinfo, '/new')) {
            // new_ticket
            if ($pathinfo === '/newTicket') {
                return array (  '_controller' => 'AppBundle\\Controller\\NewTicketController::newTicket',  '_route' => 'new_ticket',);
            }

            // new_user
            if ($pathinfo === '/newUser') {
                return array (  '_controller' => 'AppBundle\\Controller\\NewUserController::NewUser',  '_route' => 'new_user',);
            }

        }

        // user_edit_User
        if (0 === strpos($pathinfo, '/User') && preg_match('#^/User/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit_User')), array (  '_controller' => 'AppBundle\\Controller\\NewUserController::EditUser',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // secure_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::UserLogin',  '_route' => 'secure_login',);
            }

            // secure_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::UserLogout',  '_route' => 'secure_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
