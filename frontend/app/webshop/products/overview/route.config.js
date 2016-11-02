function OverviewRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('products',
      {
        url : '/products',
        controller : 'OverviewController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/products/overview/overview.tpl'
      })
}
export default OverviewRouteConfig;
