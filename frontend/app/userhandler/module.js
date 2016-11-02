import Login from './login/module';
import Registration from './registration/module';
import Profile from './profile/module';

export default angular.module('myapp.userhandler', [
  Registration.name,
  Login.name,
  Profile.name
])
