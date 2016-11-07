<div class="profile">
    <div class="container">
        <h1 class="title">Profil</h1>
        <div class="details">
                    <div id="details" class="profile-header col-md-12 col-sm-12 col-xs-12">Felhasználói adatok</div>      
                    <div ng-init="vm.modifyProfileDetails = false" ng-hide="vm.modifyProfileDetails" >
                                <table class="table table-hover">
                                    <tr>
                                        <td>Név:</td>
                                        <td>{{vm.profile.name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{vm.profile.email}}</td>
                                    </tr>                                    
                                    <tr>
                                        <td>Cím:</td>
                                        <td>{{vm.profile.zipcode}} {{vm.profile.city}} {{vm.profile.address}}</td>
                                    </tr> 
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td>{{vm.profile.phone}}</td>
                                    </tr>
                                </table>
                                <button class="btn col-md-12 col-sm-12 col-xs-12" ng-click="vm.modifyProfileDetails=!vm.modifyProfileDetails">Módostás</button>
                            </div>
                            <div ng-show="vm.modifyProfileDetails">
                            <form name="detailsform" class="subscribe_form" ng-submit="detailsform.$valid && vm.updateProfileDetails()" novalidate>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.profileModifyDetails.name"  name="name" id="name"  placeholder="Név" required/>
                                  <div ng-messages="detailsform.name.$error"  ng-if="detailsform.name.$touched  || detailsform.$submitted"  class="error-message"  role="alert">
                                    <div ng-message="required">Kérlek add meg a neved</div>
                                  </div>   
                                </div>                              
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.profileModifyDetails.phone"  name="phone" id="phone"  placeholder="Telefonszám" required/>
                                    <div ng-messages="detailsform.phone.$error" ng-if="detailsform.phone.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a telefonszámod</div>
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.profileModifyDetails.city"  name="city" id="city"  placeholder="Város" required/>
                                    <div ng-messages="detailsform.city.$error" ng-if="detailsform.city.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a várost</div>
                                    </div>      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.profileModifyDetails.zipcode"  name="zipcode" id="zipcode"  placeholder="Irányító szám" required/>
                                    <div ng-messages="detailsform.zipcode.$error" ng-if="detailsform.zipcode.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg az irányítószámod</div>    
                                    </div>                           
                                </div>
                                <div class="form-group">
                                    <input type="text" class="required form-control" ng-model="vm.profileModifyDetails.address"   name="address" id="address"  placeholder="Cím" required/>
                                    <div ng-messages="detailsform.address.$error" ng-if="detailsform.address.$touched  || detailsform.$submitted"  class="error-message" role="alert">
                                        <div ng-message="required">Kérlek add meg a címed</div>    
                                    </div>                  
                                </div>
                                <button type="submit" class="btn col-md-12 col-sm-12 col-xs-12">Mentés</button>
                            </form>
                            </div>
                        </div>

        
        </div>    
    </div>
</div>
        