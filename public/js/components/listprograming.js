const listsprograming ={
  name: "listsprograming",
  template: `
  <div>
    <ol>
      <li v-for="lan in language">@{{lan}}</li>
    </ol>
</div>
`,
  data: function(){
    return {
       language:["Jaca","PYthon","C","PHP"],
    }
  }
}