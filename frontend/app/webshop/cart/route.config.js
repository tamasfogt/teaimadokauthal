function CartRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('cart',
      {
        url : '/cart',
        controller : 'CartController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/cart/cart.tpl'
      })
}
export default CartRouteConfig;
