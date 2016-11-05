import MainRouteConfig from './main-route.config';
import MainRun from './main.run';


import UserHandler from './userhandler/module';
import Common from './common/module';
import Webshop from './webshop/module';


angular.module('myapp', ['ui.router', 'ui.bootstrap', 'ngAnimate', 'ngCookies','ngMessages', 'toastr', 
                         Common.name,
                         UserHandler.name,
                        Webshop.name
                        ])
    .config(MainRouteConfig)
    .run(MainRun);
