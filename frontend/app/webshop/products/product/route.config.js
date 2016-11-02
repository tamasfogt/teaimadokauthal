function ProductRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('product',
      {
        url : '/products/:productId',
        controller : 'ProductController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'webshop/products/product/product.tpl'
      })
}
export default ProductRouteConfig;
