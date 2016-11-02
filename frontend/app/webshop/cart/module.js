import CartRouteConfig from './route.config';
import CartController from './cart.controller';
import CartFactory from './cart.factory';

export default angular.module('myapp.webshop.cart', [])
  .config(CartRouteConfig)
  .controller('CartController', CartController)
  .factory('CartFactory', CartFactory)
 
