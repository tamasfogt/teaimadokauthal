function CartController(CartFactory,$state,$rootScope,  toastr, $timeout) {
  "ngInject"
  var vm = this;
    vm.products = CartFactory.getProducts();
    vm.buyProduct = buyProduct;
    vm.addProduct = addProduct;
    vm.subProduct = subProduct;
    vm.removeProduct = removeProduct;
    vm.showPayment = false;

    vm.shippingDetails = false;
    vm.shippingPayment  = true;
    vm.shippingReview = true;    
    vm.moveToPanel = moveToPanel;
    
    vm.modifyShipmentDetails = modifyShipmentDetails;
    
    
    function modifyShipmentDetails(){
        console.log(vm.shipmentModifyDetails)    
    }
    
    function moveToPanel(moveTo) {
            
        switch(moveTo) {
                case 'shippingDetails':
                    vm.shippingDetails = false;
                    vm.shippingPayment  = true;
                    vm.shippingReview = true; 
                              $timeout(function() {
                                  $('html, body').animate({
                                      scrollTop: $("#details").offset().top-100
                                  }, 500);
                              }, 200);
                break;
                case 'shippingPayment':
                    vm.shippingDetails = true;
                    vm.shippingPayment  = false;
                    vm.shippingReview = true; 
                    $timeout(function() {
                        $('html, body').animate({
                            scrollTop: $("#payment").offset().top-100
                        }, 500);
                    }, 200);
                    
                break;
                case 'shippingReview':
                    vm.shippingDetails = true;
                    vm.shippingPayment  = true;
                    vm.shippingReview = false; 
                    $timeout(function() {        
                        $('html, body').animate({
                            scrollTop: $("#review").offset().top-100
                        }, 500);
                    }, 200);
                break;
        }
    }
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
     //   $state.go('buyfailed');
        CartFactory.buy(vm.products).then(function(response){
            
            if(response.data === 'false'){
                console.log(response.data)
                 window.location.href = "/login"
            }
            vm.showPayment = true;
        });
    }
    
    function success(response) {
        vm.products = response.data;
    }
    
    function error(error) {
        console.log(error)
    }

}
export default CartController;
