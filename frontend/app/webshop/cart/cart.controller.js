function CartController(CartFactory,$state,$rootScope,  toastr) {
  "ngInject"
  var vm = this;
    vm.products = CartFactory.getProducts();
    vm.buyProduct = buyProduct;
    vm.addProduct = addProduct;
    vm.subProduct = subProduct;
    vm.removeProduct = removeProduct;
    
    function addProduct() {
        updateProduct(vm.products);    
    }
    
    function subProduct() {
        updateProduct(vm.products);
    }
    
    function removeProduct(index) {
        if (index > -1) {
            vm.products.splice(index, 1);
        }
        $rootScope.$broadcast('updatecartheader', { add: -1 });
        updateProduct(vm.products);
    }
    
    function updateProduct(products) {
        
        CartFactory.updateProducts(products);
    }
    
    function buyProduct(){

        
        $state.go('buyfailed');
        CartFactory.buy(vm.products);
    }
    
    function success(response) {
        vm.products = response.data;
    }
    
    function error(error) {
        console.log(error)
    }

}
export default CartController;
