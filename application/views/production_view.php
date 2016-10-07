<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<h5>McDonalds Legendary Recipes</h5>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Ingredients</th>
  </tr>

 {items}
  <tr>
    <td>{name}</td>
    <td>{description}</td>
    <td>{ingredients}</td>
  </tr>
{/items}

</table>


<!--
QUICK Production_View page REQUIREMENTS...

- show all recipes
- For the selected one, show the ingredients that go into it flagging any that are not on hand. 
- Log any items made, without updating inventory. ???????

-->