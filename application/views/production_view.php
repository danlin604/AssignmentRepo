<h5>McDonalds Legendary Recipes</h5>

<table>
  <tr>
    <th>Name</th>
  </tr>

 {items}
  <tr>
    <td><a href="/production/{id}" title="{id}"> {name} </a></td>
  </tr>
{/items}

</table>


<!--
QUICK Production_View page REQUIREMENTS...

- show all recipes
- For the selected one, show the ingredients that go into it flagging any that are not on hand. 
- Log any items made, without updating inventory. ???????

-->