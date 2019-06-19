const lists ={
  name: "lists",
  template: `
  <div>
    <ol>
      <li v-for="person in people">@{{person}}</li>
    </ol>
</div>
`,
  data: function(){
    return {
       people:["Andres","JUan","Pepe","Alejandro"],
    }
  }
}