import ProductRouteConfig from './route.config';
import ProductController from './product.controller';

export default angular.module('myapp.webshop.products.product', [])
  .config(ProductRouteConfig)
  .controller('ProductController', ProductController)
 
