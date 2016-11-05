<div class="cart">
    <div class="container">
    <h1 class="title">Kosár</h1>
    <div ng-hide="vm.showPayment">
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

    <div > <!--ng-show="vm.showPayment"-->
        <div class="shipment">    
            <div id="details" class="shipment-header col-md-12 col-sm-12 col-xs-12">Szállítási és számlázási adatok</div>                 
            <div class="shipment-details" ng-class="vm.shippingDetails ? 'closed' : ''">    
                        <div class="shipment-content  col-md-12 col-sm-12 col-xs-12">
                            <h3>Szállítási adatok</h3>
                            <div ng-init="vm.shipmentModify=false" ng-hide="vm.shipmentModify" >
                                <table class="table table-hover">
                                    <tr>
                                        <td>Név:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cím:</td>
                                        <td></td>
                                    </tr> 
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td></td>
                                    </tr>
                                </table>
                                <button class="btn col-md-12 col-sm-12 col-xs-12" ng-click="vm.shipmentModify=!vm.shipmentModify">Módostás</button>
                            </div>
                            <div ng-show="vm.shipmentModify">
                            <form name="detailsform" class="subscribe_form" ng-submit="detailsform.$valid && vm.modifyShipmentDetails()" novalidate>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.shipmentModifyDetails.name"  name="name" id="name"  placeholder="Név" required/>
                                  <div ng-messages="detailsform.name.$error"  ng-if="detailsform.name.$touched  || detailsform.$submitted"  class="error-message"  role="alert">
                                    <div ng-message="required">Kérlek add meg a neved</div>
                                  </div>   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.shipmentModifyDetails.phone"  name="phone" id="phone"  placeholder="Telefonszám" required/>
                                    <div ng-messages="detailsform.phone.$error" ng-if="detailsform.phone.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a telefonszámod</div>
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.shipmentModifyDetails.city"  name="city" id="city"  placeholder="Város" required/>
                                    <div ng-messages="detailsform.city.$error" ng-if="detailsform.city.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a várost</div>
                                    </div>      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.shipmentModifyDetails.zipcode"  name="zipcode" id="zipcode"  placeholder="Irányító szám" required/>
                                    <div ng-messages="detailsform.zipcode.$error" ng-if="detailsform.zipcode.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg az irányítószámod</div>    
                                    </div>                           
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.shipmentModifyDetails.address"   name="address" id="address"  placeholder="Cím" required/>
                                    <div ng-messages="detailsform.address.$error" ng-if="detailsform.address.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a címed</div>    
                                    </div>                  
                                </div>
                                <button type="submit" class="btn col-md-12 col-sm-12 col-xs-12">Mentés</button>
                            </form>
                            </div>
                        </div>
                        <div class="shipment-content  col-md-12 col-sm-12 col-xs-12">
                            <h3>Számlázási adatok</h3>                            
                            <div ng-init="vm.accountingModify=false" ng-hide="vm.accountingModify" >
                                <table class="table table-hover">
                                    <tr>
                                        <td>Név:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cím:</td>
                                        <td></td>
                                    </tr> 
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td></td>
                                    </tr>
                                </table>
                                
                                <button class="btn col-md-12 col-sm-12 col-xs-12" ng-click="vm.accountingModify=!vm.accountingModify">Módostás</button>
                            </div>   
                             <div ng-show="vm.accountingModify">
                            <form name="accountingform" class="subscribe_form" novalidate>
                                <div class="form-group">
                                    <input type="text" class="required form-control"  name="name" id="name"  placeholder="Név" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control"  name="phone" id="phone"  placeholder="Telefonszám" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control"  name="city" id="city"  placeholder="Város" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control"  name="zipcode" id="zipcode"  placeholder="Irányító szám" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control"  name="address" id="address"  placeholder="Cím" required/>
                                </div>              
                                <button class="btn col-md-12 col-sm-12 col-xs-12" >Mentés</button>
                            </form>
                            </div>
                            
                        </div>            
                         <div class="shipment-content  col-md-12 col-sm-12 col-xs-12">
                            <h3>Üzenet a futárnak</h3>    
                                <div class="input-field ">
                                    <textarea name="message" class="form-control" rows="10" cols="10" id="message"   placeholder="Üzenet" required></textarea>
                                </div>
                        </div>
                     <button class="btn-large next col-md-12 col-sm-12 col-xs-12" ng-click="vm.moveToPanel('shippingPayment')" ng-disabled="!vm.detailsOk">Tovább</button>
                </div>        
                <div id="payment" class="shipment-header col-md-12 col-sm-12 col-xs-12">Fizetés típusa</div>                
                <div class="shipment-payment-type-chooser" ng-class="vm.shippingPayment ? 'closed' : ''">
                <button class="btn back col-md-12 col-sm-12 col-xs-12" ng-click="vm.moveToPanel('shippingDetails')">Vissza</button>                
                    <div class="shipment-content  col-md-12 col-sm-12 col-xs-12">
                     <!--   <div class="card"></div> -->
                        <form novalidate>
                            <div class="paypal">
                                <label for="paypal">PayPal</label>
                                <input type="radio" class="option-input radio" ng-model="vm.payment.paymentType" name="payment" id="paypal" value="paypal" required/>
                            </div>
                            <div class="courier">
                                <label for="courier">Futárnak készpénzzel</label>
                                <input type="radio" class="option-input radio" ng-model="vm.payment.paymentType"   name="payment" id="courier" value="courier" required/>
                            </div>
                        </form>    
                    </div>
                    <button class="btn-large next col-md-12 col-sm-12 col-xs-12"  ng-click="vm.moveToPanel('shippingReview')" ng-disabled="!vm.payment.paymentType">Tovább</button>
                </div>
                <div id="review" class="shipment-header col-md-12 col-sm-12 col-xs-12">Áttekintés</div>            
                <div class="shipment-review" ng-class="vm.shippingReview ? 'closed' : ''">
                    <button class="btn back col-md-12 col-sm-12 col-xs-12"   ng-click="vm.moveToPanel('shippingPayment')">Vissza</button>         
                        <div class="shipment-content  col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Név</th>
                                        <th>Egység ár</th>                                       
                                        <th>db</th>
                                    </tr>
                                </table>
                                <b>Szállítás</b>
                                <table class="table table-hover">
                                    <tr>
                                        <td>Név:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cím:</td>
                                        <td></td>
                                    </tr> 
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td></td>
                                    </tr>
                                </table> 
                                <b>Számlázás</b>
                                <table class="table table-hover">
                                    <tr>
                                        <td>Név:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cím:</td>
                                        <td></td>
                                    </tr> 
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td></td>
                                    </tr>
                                </table> 
                                <b>Üzenet</b>
                                <p>aaaaaa</p>
                                <b>Fizetési típusa</b>
                                <p>Paypal</p>
                        </div>
                   <button class="btn-large col-md-12 col-sm-12 col-xs-12">Fizetés befejezése</button>     
                </div>                 
            </div>
        </div>    
    </div>
</div>    