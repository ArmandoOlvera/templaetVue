Vue.component('img-post',{ 
   
  template: '<img :src="imgPost()" :alt="alterado" >',
  props:{
   url: String
},
   data: function(){
  return{
    title:"Titulo de la imagen"
  }
}, methods:{
  imgPost(){
    if(this.url != ""){
       return this.url;
      
       }else{
         return "victoria.edu.mx/wp-content/uploads/2018/09/UP_Victoria.png"
       }
  }
}
});