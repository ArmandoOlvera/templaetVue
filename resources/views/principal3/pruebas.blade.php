<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"     >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/vue.js"></script>
       <script src="js/vue-router.js"></script>
      
      <title>Laravel123</title>
 
 </head>
    <body>
      <div class="container">
      
      <div id="app1">
        
        
        <modal-css>
          <div slot="header">
            <h5 class="modal-title" id="exampleModalLabel">HOla MUndo</h5>
          </div>
          
        <p>
          Esto es el contenido del modal
        
          </p>
          <div slot="footer">
            <h5 class="modal-title" id="exampleModalLabel">Pie de modal</h5>
          </div>
        </modal-css>
        <router-link to="/">=Go to Home</router-link>
        <router-link to="/listsperson">=Go to List Person</router-link>
        <router-link to="/listsprograming">=Go to List Programing</router-link>
         <router-link to="/about">=Go to List Persons by redirect</router-link>
        <router-link to="/inexistente">=PAGINA QUE NO EXISTE</router-link>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          
  Launch demo modal
</button>
        <router-view></router-view>
      </div> 
          
      </div>
      <script type="text/x-template" id="PageNotFound">
      <div>
      <h1>ERROR 404</h1>
      </div>
      </script>
       
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <script src="js/components/list.js"></script>  
      <script src="js/components/listprograming.js"></script>
      <script src="js/components/ListAlert.js"></script>
      <script src="js/components/listperson.js"></script>  
      <script src="js/components/Slot.js"></script> 
  <script src="js/aplication.js"></script>    
</body>
   
  
 
</html>
 
