<br><br><br><br><br><br><br>

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
  </tr>
  {supplies}
  <tr>
    <td>{id}</td>
    <td>{Desc}</td>
    <td>{receiving_unit}</td>
	<td>{receiving_cost}</td>
	<td>{stock_unit}</td>
	<td>{quantities_on_hand}</td>
  </tr>
  {/supplies}
</table>

<br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Ingredients Required</th>
  </tr>
  {recipes}
  <tr>
    <td>{name}</td>
    <td>{description}</td>
    <td>{ingredients}</td>
  </tr>
  {/recipes}
</table>

<br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
	<th>Price</th>
	<th>Current Avaliability</th>
  </tr>
  {stock}
  <tr>
    <td>{name}</td>
    <td>{description}</td>
    <td>{price}</td>
	<td>{currAvail}</td>
  </tr>
  {/stock}
</table>