<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Description</th>
      <th class="mdl-data-table__cell--non-numeric">Recieving Unit</th>
      <th class="mdl-data-table__cell--non-numeric">Receiving Cost</th>
      <th class="mdl-data-table__cell--non-numeric">Stock Unit</th>
      <th class="mdl-data-table__cell--non-numeric">Quantities on Hand</th>
      <th class="mdl-data-table__cell--non-numeric">Edit</th>
      <th class="mdl-data-table__cell--non-numeric">Delete</th>
    </tr>
  </thead>

  {supplies}
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{name}</td>
      <td class="mdl-data-table__cell--non-numeric">{Desc}</td>
      <td class="mdl-data-table__cell--non-numeric">{receiving_unit}</td>
      <td>{receiving_cost}</td>
      <td class="mdl-data-table__cell--non-numeric">{stock_unit}</td>
      <td class="mdl-data-table__cell--non-numeric">{quantities_on_hand}</td>
      <td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
      <td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
    </tr>
  </tbody>
  {/supplies}
</table>

<br>
<td><button type="add_supply" onClick="alert('add functionality here')">Add Supply</button></td>
<br><br>

<table class="mdl-data-table mdl-js-data-table mdl-data-table full-width-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Description</th>
      <th class="mdl-data-table__cell--non-numeric">Ingredients Required</th>
    </tr>
  </thead>

  {recipes}
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{name}</td>
      <td class="mdl-data-table__cell--non-numeric">{description}</td>
      <td class="mdl-data-table__cell--non-numeric">{ingredients}</td>
      <td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
      <td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
    </tr>
  </tbody>
  {/recipes}
</table>

<br>
<td><button type="add_recipe" onClick="alert('add functionality here')">Add Recipe</button></td>
<br><br>

<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp full-width">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Description</th>
      <th class="mdl-data-table__cell--non-numeric">Price</th>
      <th class="mdl-data-table__cell--non-numeric">Current Avaliability</th>
      <th class="mdl-data-table__cell--non-numeric">Edit</th>
      <th class="mdl-data-table__cell--non-numeric">Delete</th>
    </tr>
  </thead>

  {stock}
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{name}</td>
      <td class="mdl-data-table__cell--non-numeric"><p class="desc">{description}</p></td>
      <td>{price}</td>
      <td>{currAvail}</td>
      <td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
      <td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
    </tr>
  </tbody>
  {/stock}
</table>

<br>
<td><button type="add_stock" onClick="alert('add functionality here')">Add Stock</button></td>
<br>

