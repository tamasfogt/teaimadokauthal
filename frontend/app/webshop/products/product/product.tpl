<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 product-imagebox">
                <div class="row">
                    <div ng-init="vm.currentImage = vm.product.images[0]" class="mainImageBox col-md-12 col-sm-12 col-xs-12" >
                    <img src="{{vm.currentImage}}"  alt="product"/>
                    </div>
                 </div>    
                <div class="row">
                    <div class="smallImageBox col-md-4 col-sm-4 col-xs-4" ng-repeat="image in vm.product.images[0] |limitTo:3">
                    <img src="{{vm.product.images[$index]}}" ng-click="vm.currentImage = vm.product.images[$index]"   alt="product"/>
                    </div>
                </div>


            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 description-block">
                <div class="center-block">
                    <div class="row">
                        <h3 class="heading">{{vm.product.heading}}</h3>
                    </div> 
                    <div class="row">
                        <p class="description">{{vm.product.description}}</p>
                    </div>
                </div>
                <div class="pricebox center-block">
                    <div class="row ">
                         <h3  class="pricehead"><b>Már kevesebb mint 1 csésze kávé áráért!</b></h3>
                         <div class="gramm">
                             <object data="/dist/images/old-weights.svg" style="width:35px;height:35px;" type="image/svg+xml"></object>
                                {{vm.product.gramm}} grammos kiszerelés</div>
                            <div class="cup">
                                <object data="/dist/images/cup.svg" style="width:35px;height:35px;" type="image/svg+xml"></object>
                                 {{vm.product.serving}} csésze tea készíthető</div>                
                    </div>
                    <div class="row ">
                        <div class="quantity">
                            <span class="productprice"><object data="/dist/images/dollars-money-bag.svg" style="width:50px;height:50px;" type="image/svg+xml"></object>{{vm.product.price}}Ft / db </span>
                            <div class="quantitybuttons">
                                <button ng-init="vm.product.quantity" class="btn green lighten-2" ng-click="vm.product.quantity>1 &&  (vm.product.quantity = vm.product.quantity-1)">-</button>
                                       {{vm.product.quantity}}
                                <button class="btn green lighten-2" ng-click="vm.product.quantity<10 &&  (vm.product.quantity = vm.product.quantity+1)">+</button> 
                            </div>
                        </div>
                        <div class="row">                        
                            <button class="btn-large green col-sm-12 col-xs-12 col-md-12"    style="font-size: 20"  ng-click="vm.buy()">Megveszem <i class="fa fa-cart-plus" style="font-size:20px" aria-hidden="true"></i></button> 
                            <div style="text-align:center;">A házhoz szállítás 5000Ft felett <b>INGYENES!</b></div>
                        </div>
                        <div class="row">    
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="guarantee"><i class="fa fa-shield" aria-hidden="true"></i> 100%-os pénzvisszafizetési garancia <i class="fa fa-shield" aria-hidden="true"></i></h3>
                            </div>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>    

