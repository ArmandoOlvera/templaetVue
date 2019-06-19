<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/vue.js"></script>
  <title>Vue</title>

</head>

<body>
  <div class="container">
    <div id="app1">
      <select>
           <option v-show="filter(l)" v-for="(l, index) in languages"  :value="l">@{{l}}</option>
          </select>
      <input v-model="filterfield">
      <hr>

      <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" v-model="filterfield2">
      </div>
      <label>Edad</label>
      <div class="row">
        <div class="col-6">

          <div class="form-group">

            <input class="form-control" v-model="filterAgefield">
          </div>
        </div>
        <div class="col-6">

          <select class="form-control" v-model="selectfilterAgefield">
             <option value="<">&#60;</option>
             <option value=">">&#62;</option>
             <option value="<=">&#60;=</option>
             <option value=">=">&#62;=</option>
             <option value="==">=</option>
           </select>
        </div>
        <label>Inactivo</label>
        <input type="checkbox" v-on:click="filterFieldActive=0" v-model="filterfieldInactive">
        <label>Activo</label>
        <input type="checkbox" v-on:click="filterfieldInactive =0" v-model="filterFieldActive">
        <table class="table">
          <tr>
            <th>NOmbre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Activo</th>
          </tr>
          <tr v-show="filterFieldActive123(person)" v-for="person in people">
            <td>@{{person.name}}</td>
            <td>@{{person.surname}}</td>
            <td>@{{person.age}}</td>
            <td>@{{person.active}}</td>

          </tr>

        </table>


      </div>
    </div>


    <script src="js/components/Filter_Select.js"></script>
    <script src="js/components/Filter_Object.js"></script>
    <script>
      var app1 = new Vue({
        el: "#app1",
        data: {
          languages: ["JAVA", "C", "Swift", "Javascript"],
          filterfield: '',
          filterfield2: '',
          filterAgefield: '',
          selectfilterAgefield:'<',
          filterfieldInactive: false,
          filterFieldActive: false,
          people: [{
              name: "Andres11",
              surname: "cruz11",
              age: 11,
              active: false
            },
            {
              name: "Andres22",
              surname: "cruz22",
              age: 22,
              active: true
            },
            {
              name: "Andres33",
              surname: "cruz33",
              age: 33,
              active: false
            },
            {
              name: "Andres44",
              surname: "cruz44",
              age: 44,
              active: true
            },
            {
              name: "Andres55",
              surname: "cruz55",
              age: 55,
              active: false
            },
          ],
        },
        methods: {
          filter(l) {
            console.log(l + " " + this.filterfield)

            return l.toLocaleLowerCase().indexOf(this.filterfield.toLocaleLowerCase()) >= 0
          },
          filter2(person) {
            console.log(person.name + " " + this.filterFieldActive)
            return person.name.toLocaleLowerCase().indexOf(this.filterfield2.toLocaleLowerCase()) >= 0
          },
          filterFieldActive123(person) {
            console.log(person.name + " " + this.filterFieldActive)
            var show = true
            /*if(person.name.toLocaleLowerCase().indexOf(this.filterfield2.toLocaleLowerCase()) < 0){
               show=false
               }else if(person.active == false && this.filterFieldActive){
                 show=false
               }else if(person.active == true && this.filterFieldActive){
                 show=true
               }else if(person.active == true && this.filterfieldInactive){
                 show=false
               }
               
               person.age != this.filterAgefield && this.filterAgefield != "" 8<9
            */
            if (this.filterAgefield != "" && !eval(this.filterAgefield+this.selectfilterAgefield+person.age)  ) {
              show = false
            } else if (person.active == false && this.filterFieldActive) {
              show = false
            } else if (person.active == true && this.filterFieldActive) {
              show = true
            } else if (person.active == true && this.filterfieldInactive) {
              show = false
            }
            return show

          },
        },
      })
    </script>

</body>



</html>