const listsperson ={
  name: "listsperson",
  template: `
  <div>
<list-alert></list-alert>
    <ol>
      <li v-for="person in people">@{{person}}</li>
    </ol>
<ul>
          <li v-for="(person,index) in people">
            {{index}}-{{person}}
           <span v-if="index == people.length-1">Este es el ultimo elemento   </span>
          </li>
        </ul>
</div>
`,
  data: function(){
    return {
       people:["Andres","JUan","Pepe","Alejandro"],
    }
  }
}