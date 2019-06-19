const Foo = { template: '<div>Hola MUndo</div>' }
const Bar = { template: '<div>Adios MUndo</div>' }

const routes = [
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})


var app1 = new Vue({
  el: '#app1',
  router,
  data:{
    message: 'Hola Vue',
     sum: 2+3,
    value: 6,
    isVisible:false,
    people:["Andres","JUan","Pepe","Alejandro"],
    content_html: "<h1>Hola Mundo Vue</h1>",
    src:"http://www.upvictoria.edu.mx/wp-content/uploads/2018/09/UP_Victoria.png",
    img_pixa:"http://www.upvictoria.edu.mx/wp-content/uploads/2018/09/UP_Victoria.png",
    txt:" Ejemplo de texto en el alt",
    numero:12,
    v_model:"",
    filtro_edad:19,
    p_error:true,
    ArrayObjects: [
      {name: "Andres11", surname: "cruz11", age:11},
      {name: "Andres22", surname: "cruz22", age:22},
      {name: "Andres33", surname: "cruz33", age:33},
      {name: "Andres44", surname: "cruz44", age:44},
      {name: "Andres55", surname: "cruz55", age:55},
    ],
    CopyArrayObjects: [
      ],
    
    
    
  },  
  created: function(){
  //  console.log("hola mundo- created"),
  this.CopyArrayObjects = this.ArrayObjects;
  },
  computed: {
    // un getter computado
    reversedMessage: function () {
      // `this` apunta a la instancia de vm
      return this.message.split('').reverse().join('')
    }
  },
  methods:{
    imgPost(){
      if(this.url!=""){
        return this.url;
      }
    },
    filterPeopleObjects: function(){
      this.ArrayObjects = this.CopyArrayObjects;
    this.ArrayObjects=this.ArrayObjects.filter(
    person=>{
      return person.age>this.filtro_edad
    })
  },
    filterPeople: function(){
      this.people= this.people.filter(person =>{
        return person.length >5
      })
    },
    calculatesum(var1,var2){
      return var1+var2;
    },
    incrementar(){
      this.numero++
    },
    decrementar(){
      this.numero--
    },
  },
  watch:{
    numero: function(valor){
      console.log("Watch: "+valor)
    }
  }
 
});