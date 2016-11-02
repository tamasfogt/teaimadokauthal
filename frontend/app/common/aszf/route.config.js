function AszfRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('aszf',
      {
        url : '/aszf',
        controller : 'AszfController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'common/aszf/aszf.tpl'
      })
}
export default AszfRouteConfig;
