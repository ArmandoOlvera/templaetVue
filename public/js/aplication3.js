const PageNotFound = {
  template:'#PageNotFound'
};


const router= new VueRouter({
  base:"public",
  
  routes:[
    {
      path:'/lists',
      component:lists
    },
    {
      path:'/listsprograming',
      component:listsprograming
    },
    {
      path:'/listsperson',
      component:listsperson
    },
    {
      path:'/about',
      redirect:'/about-us'
    },
    {
      path:'/about-us',
      component:listsperson
    },
    {
      path:'*',
      component:PageNotFound
    },
  ]
}) 

var app1 = new Vue({
 router,
 el: '#app1',
  mounted(){
     console.log(this.$route)
  }
  
});