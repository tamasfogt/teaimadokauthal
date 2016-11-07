import DescriptionsRouteConfig from './route.config';
import DescriptionsController from './descriptions.controller';


export default angular.module('myapp.webshop.descriptions', [])
  .config(DescriptionsRouteConfig)
  .controller('DescriptionsController', DescriptionsController);
 
