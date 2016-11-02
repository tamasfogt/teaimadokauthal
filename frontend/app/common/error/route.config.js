function ErrorRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('errors',
      {
        url : '/errors/:error',
        controller : 'ErrorController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'common/error/error.tpl'
      })
}
export default ErrorRouteConfig;
