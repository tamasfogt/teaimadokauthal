import ErrorRouteConfig from './route.config';
import ErrorController from './error.controller';


export default angular.module('myapp.common.error', [])
  .config(ErrorRouteConfig)
  .controller('ErrorController', ErrorController)

