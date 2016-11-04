function HeaderController($scope, $http, $cookies, $timeout) {
  "ngInject"
  
    $scope.isLoggedIn =false;
    $scope.logout =logout;
    $scope.cartCount = 0;
        
    $scope.login = login;
    $scope.register = register;

    if($cookies.get("teaimadokproducts")){
        let products = JSON.parse($cookies.get("teaimadokproducts"));
         $scope.cartCount = products.length;
    }
    
    
    function login() {
      window.location.href = "/login"
    }

    function register() {
         window.location.href = "/register"
    }
    
    $scope.$on('updatecartheader', function(event, args) {
       
            $timeout(function() {
                if($cookies.get("teaimadokproducts")){
                    let products = JSON.parse($cookies.get("teaimadokproducts"));
                    $scope.cartCount = products.length;
                }
                }, 200);

    });
    
    function logout(){
        window.location.href = "/auth/logout"
    }
}
export default HeaderController;
