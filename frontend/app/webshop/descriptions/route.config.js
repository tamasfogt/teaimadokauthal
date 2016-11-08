function DescriptionsRouteConfig($stateProvider, BASE_DIR, $httpProvider) {
  "ngInject";
  $stateProvider
    .state('descriptions',
      {
        url : '/descriptions/:descriptionId',
        controller : 'DescriptionsController',
        controllerAs : 'vm',
        templateUrl : function ($stateParams) {
            console.log($stateParams.descriptionId)
            console.log(BASE_DIR.path+'webshop/descriptions/templates/' + $stateParams.descriptionId + '.tpl');
            return BASE_DIR.path+'webshop/descriptions/templates/' + $stateParams.descriptionId + '.tpl';
        }


      })
}
export default DescriptionsRouteConfig;
