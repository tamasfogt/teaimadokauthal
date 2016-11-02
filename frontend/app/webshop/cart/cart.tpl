<div class="cart">
    <div class="container">
    <h1 class="title">Kosár</h1>
    <div ng-show="vm.products.length==0">
        <h1>Üres a kosarad !</h1>
    </div>
    <div ng-hide="vm.products.length==0" >
        <div class="row">
            <div class="cartitems" >
                <div  class="cartitem hoverable" ng-repeat="product in vm.products track by $index">
                    <div ng-class-odd="'odd'" ng-class-even="'even'">
                    <div class="col-md-3 col-sm-3 hidden-xs center-block"><img class="productimage" src="{{product.image}}" alt="{{product.name}}"/></div>
                    <div class="col-md-7 col-sm-6 col-xs-6">
                        <div class="name"><b>{{product.name}}</b></div>
                        
                        
                        <div class="gramm hidden-xs hidden-sm visible-md visible-lg">A {{product.gramm}}-os kiszerelést választottad, amelyből akár {{product.serving}} csésze teát készíthetsz.</div>
                        <div class="gramm visible-xs visible-sm hidden-md hidden-lg"><b>Kiszerelés:</b> {{product.gramm}}g</div>
                         <h2 class="pricePerServing">{{product.pricePerItem}}Ft/csésze</h2>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 center-block">
                        <div class="row"><a class="black-text pull-right" href="" ng-click="vm.removeProduct($index)"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                        <div class="row productpricepanel" >
                            <div class="row">
                                <div class="sum">{{product.price*product.quantity}}Ft</div>
                            </div>  
                             <div class="row">
                                 <div class="modifyvalue">
                                <button class="btn green lighten-2 sub" ng-click="product.quantity>1 &&  (product.quantity = product.quantity-1) && vm.subProduct(product)">-</button>
                                     <span class="quantity">{{product.quantity}}</span>
                                <button class="btn green lighten-2 add" ng-click="product.quantity<10 &&  (product.quantity = product.quantity+1) && vm.addProduct(product)">+</button>
                                </div>     
                            </div>    
                            <div class="row"> 
                                <div class="price text-center" ><b>Egységár:</b> {{product.price}}Ft</div>
                            </div>
                        </div>    

                    </div>    
                </div>
                </div>
            </div>    
        </div>
        <div class="row">
            <a class="btn-large col-md-12 col-sm-12 col-xs-12" style="font-size:30px;" href="" ng-click="vm.buyProduct()">Fizetés</a>
        </div>
    </div>
    </div>    
</div>