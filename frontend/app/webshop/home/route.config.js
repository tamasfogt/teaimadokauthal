function HomeRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('home',
      {
        url : '/home',
        controller : 'HomeController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/home/home.tpl'
      })
}
export default HomeRouteConfig;
