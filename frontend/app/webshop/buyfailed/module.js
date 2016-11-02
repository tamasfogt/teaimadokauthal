import BuyfailedRouteConfig from './route.config';
import BuyfailedController from './buyfailed.controller';

export default angular.module('myapp.webshop.buyfailed', [])
  .config(BuyfailedRouteConfig)
  .controller('BuyfailedController', BuyfailedController)

