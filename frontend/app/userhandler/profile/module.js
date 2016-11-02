import ProfileRouteConfig from './route.config';
import ProfileController from './profile.controller';
import ProfileFactory from './profile.factory';

export default angular.module('myapp.userhandler.profile', [])
  .config(ProfileRouteConfig)
  .controller('ProfileController', ProfileController)
  .factory('ProfileFactory', ProfileFactory)
 
