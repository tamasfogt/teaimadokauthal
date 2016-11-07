import BuysuccessRouteConfig from './route.config';
import BuysuccessController from './buysuccess.controller';

export default angular.module('myapp.webshop.buysuccess', [])
  .config(BuysuccessRouteConfig)
  .controller('BuysuccessController', BuysuccessController)

