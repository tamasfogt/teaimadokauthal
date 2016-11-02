function ProductController(CartFactory,$rootScope, $stateParams, $state,toastr) {
  "ngInject"
  var vm = this;
    vm.product = {};
    vm.addOne = addOne;
    vm.subOne = subOne;
    vm.buy = buy;
    vm.getPricePerItem = getPricePerItem;
    
 
    
    
    
    if($stateParams.productId == 'matcha'){
        vm.product = {
            name : 'Matcha tea',
            heading:'Matcha tea',
            shortdescription:'Csatlakozz a legújabb egészség őrülethez. A Matcha tea most Magyarországra is megérkezett.',
            description: 'A legújabb egészség őrület Nyugaton már tombol és most végre Magyarországra is megérkezett! Ez a mozgalom egy egy őrölt zöld tea formájában jelent meg, amelyet Matcha-nak hívnak. A Matcha egy japán őrölt tea por, amelynek majdnem végtelen egészségügyi előnye van.',
            image:'/dist/images/matchaproduct.png',
            images:['/dist/images/matchaproduct.png','/dist/images/matcha.jpg','/dist/images/matcha-powder-drink.jpg'],    
            quantity:1,
            price:3490,
            gramm:50,
            pricePerItem:100,
            serving:30
        }
        
    }else {
        $state.go('errors',[{error:'404'}]);
    }
    function getPricePerItem(){
        vm.product.pricePerItem = Math.round(vm.product.price/vm.product.serving);
    }
    function addOne() {
        vm.product.quantity= vm.product.quantity+1;
    }
    
    
    function subOne() {
        vm.product.quantity= vm.product.quantity-1;
    }
    
    function buy() {
        let product = angular.copy(vm.product);
          toastr.success('Hozzáadva', 'Hozzáadtuk a kosár tartalmához!');
         $rootScope.$broadcast('updatecartheader', { add: 1 });
        CartFactory.addProduct(product);
    }
}
export default ProductController;
