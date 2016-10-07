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

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>recieving Unit</th>
	<th>receiving Cost</th>
	<th>Stock Unit</th>
	<th>Quantities on hand</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  {supplies}
  <tr>
    <td>{id}</td>
    <td>{Desc}</td>
    <td>{receiving_unit}</td>
	<td>{receiving_cost}</td>
	<td>{stock_unit}</td>
	<td>{quantities_on_hand}</td>
	<td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
	<td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
  </tr>
  {/supplies}
</table>

<br>
<td><button type="add_supply" onClick="alert('add functionality here')">Add Supply</button></td>
<br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Ingredients Required</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  {recipes}
  <tr>
    <td>{name}</td>
    <td>{description}</td>
    <td>{ingredients}</td>
	<td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
	<td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
  </tr>
  {/recipes}
</table>

<br>
<td><button type="add_recipe" onClick="alert('add functionality here')">Add Recipe</button></td>
<br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
	<th>Price</th>
	<th>Current Avaliability</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
  {stock}
  <tr>
    <td>{name}</td>
    <td>{description}</td>
    <td>{price}</td>
	<td>{currAvail}</td>
	<td><button type="edit" onClick="alert('add functionality here')">Edit</button></td>
	<td><button type="delete" onClick="alert('add functionality here')">Delete</button></td>
  </tr>
  {/stock}
</table>

<br>
<td><button type="add_stock" onClick="alert('add functionality here')">Add Stock</button></td>
<br>