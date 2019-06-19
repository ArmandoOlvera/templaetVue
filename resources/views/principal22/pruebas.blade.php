<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="js/vue.js"></script>
        <script src="js/ImagePost.js"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="js/vue-router.js"></script>
        <title>Laravel6666</title>
   <style>
     .error{
       color:red;
     }
     .noerror{
       color:blue;
     }
      </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
          .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
      </style>
 </head>
    <body>
      <div id="app1" class="container">
        <router-link to="/foo">Go to Foo</router-link>
    <router-link to="/bar">Go to Bar</router-link>
        <router-view></router-view>
         
        <div v-html="content_html"> </div>
        
        
        
        <img v-bind:src="src" :width="100" :height="100" :alt="txt"></img>
      @{{ message }}
          <p>Computed reversed message: "@{{ reversedMessage }}"</p>
        <p>
         @{{calculatesum(sum,5)}}
        </p>
        <div v-if="isVisible === true">Es visible</div>
        <div v-else-if="value == 5">Es visible</div>
        <div v-else>NO Es visible</div>
        @{{sum}}
      
      
        <div v-if="value>5">Value es mayor a 5</div>
        <div v-else-if="value == 5">VAlue es 5</div>
        <div v-else>NO Es mayor o igual a 5</div>
        
        <ol>
          <li v-for="person in people">@{{person}}</li>
        </ol>
      <button  class="btn btn-primary" v-on:click="filterPeople">
        Filtrar mas de 5 caracteres
      </button>
        <hr>
      <h1>
        Eventos
      </h1>
      <button @click="incrementar">Incrementar</button>
      <button @click="decrementar">Decrementar</button>
      
      <h1 :style="{color:'blue',fontSize:this.numero+'px'}">Tamanio de texto @{{numero}}</h1>
        
     
      <hr>
  <input v-model="v_model" placeholder="edit me">
<p>Message is: @{{ v_model }}</p>
      
      <h1 v-bind:class="{error:p_error, noerror:!p_error}">
        Texto de ejemplo de error
      </h1>
  
   <h1 v-if="p_error">
        Texto de ejemplo de error con IF
      </h1>
  
   <h1 v-show="p_error">
        Texto de ejemplo de error con SHOW
      </h1>
      <hr>
      <h1>
        Aray OBjetcts
      </h1>
      <ol>
          <li v-for="(person,index) in ArrayObjects">
          @{{index}} -@{{person.name}} -@{{person.age}}
        <span v-if="index == people.length -1">el ultimo</span>
        </li>
        </ol>
      <input v-model="filtro_edad" type="text">
      <button  class="btn btn-primary" v-on:click="filterPeopleObjects">
        Filtrar por edad
      </button>
      <hr>
    <img-post :url="img_pixa"></img-post> 
      
                                                            </div> 
<script src="js/components/ImagePost.js"></script>
  <script src="js/aplication2.js"></script>
  
</body>
   
  
 
</html>
 
