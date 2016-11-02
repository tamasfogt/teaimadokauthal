function MainRouteConfig($stateProvider,$urlRouterProvider,$httpProvider,$locationProvider, $logProvider) {
    "ngInject";
    
    $urlRouterProvider.otherwise('/home');
	$httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
	$locationProvider.html5Mode(true);
    $logProvider.debugEnabled(false);
   
}
export default MainRouteConfig;