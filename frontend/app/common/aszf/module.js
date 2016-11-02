import AszfRouteConfig from './route.config';
import AszfController from './aszf.controller';


export default angular.module('myapp.common.aszf', [])
  .config(AszfRouteConfig)
  .controller('AszfController', AszfController)

