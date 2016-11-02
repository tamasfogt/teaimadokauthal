import Constants from './common_constants/module';
import Directives from './common_directives/module';
import Header from './header/module';
import Error from './error/module';
import Aszf from './aszf/module';

export default angular.module('myapp.commonmodule', [Constants.name, Directives.name, Header.name, Error.name, Aszf.name])

