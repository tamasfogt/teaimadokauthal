function ProfileRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('profile',
      {
        url : '/profile',
        controller : 'ProfileController',
        controllerAs : 'vm',
        templateUrl :  BASE_DIR.path+'userhandler/profile/profile.tpl'
      })
}
export default ProfileRouteConfig;
