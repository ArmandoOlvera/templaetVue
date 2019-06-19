Vue.component('list-alert-default',{
  props:{
   // message:String
    message: {
      type:String,
      default: "valor por default"
    }
  },
  template:`
  <div class="alert alert-primary" role="alert">
 {{message}}
</div>
`
});