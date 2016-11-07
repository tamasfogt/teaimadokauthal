function ProfileController(ProfileFactory, $cookies) {
  "ngInject"
  var vm = this;
    vm.updateProfileDetails = updateProfileDetails;
    vm.profile = {};
    vm.history = [];
    
    ProfileFactory.getUserDetails().then(function success(data){
        vm.profile = data.data;
        vm.profileModifyDetails = data.data;
    },function error(data){
        console.log('error happened')
    });
    
    
    function updateProfileDetails() {
      ProfileFactory.setProfileDetails(vm.profileModifyDetails).then(success,error);
        
        function success(response){
            vm.profile = vm.profileModifyDetails;
            vm.modifyProfileDetails = false;
        }
        function error(response){
            console.log('error')
        }
    }

}
export default ProfileController;
