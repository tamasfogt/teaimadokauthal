function HeaderController($scope,$http) {
  "ngInject"
  
    $scope.isLoggedIn =false;
    $scope.logout =logout;
    $scope.cartCount = 0;
        
    $scope.login = login;
    $scope.register = register;
    
    function login() {
        console.log('login')
      window.location.href = "/login"
    }

    function register() {
         window.location.href = "/register"
    }
    
    $scope.$on('updatecartheader', function(event, args) {
        var count = args.add;
        $scope.cartCount = $scope.cartCount + count;
    });
    
    function logout(){
        window.location.href = "/auth/logout"
    }
}
export default HeaderController;
