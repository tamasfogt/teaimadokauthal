function ProfileFactory($http, URL_CONFIG){
  "ngInject"

  var service = {
      getUserDetails:getUserDetails,
      setProfileDetails:setProfileDetails
  };
  return service;
    
       function getUserDetails(){
          return  $http.get('/api/user');
       }
       function setProfileDetails(details){
          return  $http.post('/api/user',details);
       }
}

export default ProfileFactory;
