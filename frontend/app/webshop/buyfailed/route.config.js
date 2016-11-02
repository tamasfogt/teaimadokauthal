function BuyfailedRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('buyfailed',
      {
        url : '/unsuccessful',
        controller : 'BuyfailedController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/buyfailed/buyfailed.tpl'
      })
}
export default BuyfailedRouteConfig;
