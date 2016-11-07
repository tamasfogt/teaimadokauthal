function BuysuccessRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('buysuccess',
      {
        url : '/successful',
        controller : 'BuysuccessController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/buysuccess/buysuccess.tpl'
      })
}
export default BuysuccessRouteConfig;
