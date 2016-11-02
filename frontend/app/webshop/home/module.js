
import HomeRouteConfig from './route.config';
import HomeController from './home.controller';
import HomeFactory from './home.factory';

export default angular.module('myapp.webshop.home', [])
  .config(HomeRouteConfig)
  .controller('HomeController', HomeController)
  .factory('HomeFactory', HomeFactory)
 
