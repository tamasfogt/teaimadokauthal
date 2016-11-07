function DescriptionsRouteConfig($stateProvider, BASE_DIR, $httpProvider, $stateParams) {
  "ngInject";
  $stateProvider
    .state('descriptions',
      {
        url : '/descriptions/:descriptionId',
        controller : 'DescriptionsController',
        controllerAs : 'vm',
        templateUrl : function ($stateParams) {
            return BASE_DIR.path+'webshop/descriptions/templates/' + $stateParams.descriptionId + '.tpl';
        }


      })
}
export default DescriptionsRouteConfig;
