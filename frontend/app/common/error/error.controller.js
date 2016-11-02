function ErrorController( $stateParams) {
  "ngInject"
  var vm = this;
    vm.error= {}
    switch($stateParams.error){
        case '404':
            vm.error= {
                code: 404,
                message: 'Sajnos ez az oldal már nem létezik.'
            }
            break
        case '401':
            vm.error= {
                code: 401,
                message: 'Nincs jogod a megtekintéshez'
            }
            break


    }
}
export default ErrorController;
