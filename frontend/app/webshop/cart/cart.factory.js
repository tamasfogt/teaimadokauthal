/**
 * Created by fogttamas on 23/08/16.
 */
function CartFactory($http, URL_CONFIG, $rootScope, $cookies){
  "ngInject"
    $rootScope.products = [];
  var service = {
      addProduct: addProduct,
      getProducts: getProducts,
      updateProducts: updateProducts,
      buy:buy,
      sendOrder:sendOrder
  };
  return service;

    function addProduct(product) {
        let products = [];
        if($cookies.get("teaimadokproducts")){
            products = JSON.parse($cookies.get("teaimadokproducts"));
        }
        
        
        let pos = products.map(function(item) { return item.name; }).indexOf(product.name);
        if(pos!==-1){
            products[pos].quantity=  products[pos].quantity+1;
        }else{
            products.push(product);
        }
       
        $cookies.put("teaimadokproducts",JSON.stringify(products));

    }
    function getProducts() {
        let products = [];
        if($cookies.get("teaimadokproducts")){
            products = JSON.parse($cookies.get("teaimadokproducts"));
        }
        return products;

    }
    
    function updateProducts(products) {
        if($cookies.get("teaimadokproducts")){
            $cookies.put("teaimadokproducts",JSON.stringify(products));
        }
    }
    function buy() {
        var myproducts = [];
        
        if($cookies.get("teaimadokproducts")){
            myproducts = JSON.parse($cookies.get("teaimadokproducts"));
        }

        if($cookies.get("teaimadok")){
            myproducts.teaimadok = $cookies.get("teaimadok");
        }
        $http.post('/api/buy', myproducts);
        return $http.get('/api/isauthenticated');
    }
    
    function sendOrder(order){
        
      return  $http.post('/api/sendorder', order);  
    }
    
}

export default CartFactory;
