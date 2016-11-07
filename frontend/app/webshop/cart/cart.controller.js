function CartController(CartFactory, ProfileFactory, $state,$rootScope,  toastr, $timeout) {
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
    vm.sendOrder = sendOrder;
    vm.modifyShipmentDetails = modifyShipmentDetails;
    vm.modifyAccountingDetails = modifyAccountingDetails;
    
    
    vm.productDetails = {};
    
    vm.detailsOk =  vm.productDetails.shipmentDetails && vm.productDetails.accountingDetails;
    
    function modifyShipmentDetails(){
        vm.productDetails.shipmentDetails = angular.copy(vm.shipmentModifyDetails);
        vm.shipmentModify=false; 
        vm.detailsOk =  vm.productDetails.shipmentDetails && vm.productDetails.accountingDetails;
    }
    function modifyAccountingDetails(){
        vm.productDetails.accountingDetails = angular.copy(vm.accountingModifyDetails);
        vm.accountingModify=false;
         vm.detailsOk =  vm.productDetails.shipmentDetails && vm.productDetails.accountingDetails;
    }
    

    
    function sendOrder(){
        CartFactory.sendOrder(vm.productDetails).then(success,error);
        
        function success(response){
            console.log(success);
        }
        function error(error){
              $state.go('buyfailed');
        }
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

        CartFactory.buy(vm.products).then(function(response){
            
            if(response.data === 'false'){
                console.log(response.data)
                 window.location.href = "/login"
            }
            vm.showPayment = true;
            vm.productDetails.products = vm.products;
            
            let currentPrice = 0;
            angular.forEach(vm.productDetails.products, function(product) {
                    currentPrice = currentPrice + (product.price * product.quantity);
                })
            vm.shippingCost = 0; 
            if(currentPrice<5000){
                vm.shippingCost = 1000;            
                currentPrice = currentPrice + vm.shippingCost;
            } 
            

            ProfileFactory.getUserDetails().then(function success(data){
                let userDetails = data.data;
                if( userDetails.name !== null && userDetails.phone !== null && userDetails.zipcode !== null && userDetails.city !== null && userDetails.address !== null){
                        vm.productDetails.shipmentDetails = userDetails;
                        vm.productDetails.accountingDetails = userDetails;
                        vm.accountingModifyDetails = userDetails;
                        vm.shipmentModifyDetails = userDetails;
                    vm.detailsOk =  vm.productDetails.shipmentDetails && vm.productDetails.accountingDetails;            
                    }
                },function error(data){
                    console.log('error happened')
                });
            
            
            vm.productDetails.fullPrice = currentPrice;
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
