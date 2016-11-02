function HomeController(HomeFactory, $cookies) {
  "ngInject"
  var vm = this;
    console.log($cookies.get("teaimadok"))
    if($cookies.get("teaimadok") == undefined){
        $cookies.put("teaimadok",new Date().getTime());
        console.log("be");
    }

}
export default HomeController;
