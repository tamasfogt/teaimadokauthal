function HomeController(HomeFactory, $cookies) {
  "ngInject"
    var vm = this;
    if($cookies.get("teaimadok") == undefined){
        $cookies.put("teaimadok",new Date().getTime());
    }

}
export default HomeController;
