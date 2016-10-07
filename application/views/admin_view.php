<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Description</th>
      <th class="mdl-data-table__cell--non-numeric">Recieving Unit</th>
      <th class="mdl-data-table__cell--non-numeric">Receiving Cost</th>
      <th class="mdl-data-table__cell--non-numeric">Stock Unit</th>
      <th class="mdl-data-table__cell--non-numeric">Quantities on Hand</th>
    </tr>
  </thead>

  {supplies}
  <tbody>
    <tr>
      <td>{desc}</td>
      <td>{receiving_unit}</td>
      <td>{receiving_cost}</td>
      <td>{stock_unit}</td>
      <td>{quantities_on_hand}</td>
    </tr>
  </tbody>
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

<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Category</th>
      <th class="mdl-data-table__cell--non-numeric">Amount</th>
    </tr>
  </thead>

  {items}
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{name}</td>
      <td>{cost}</td>
    </tr>
  </tbody>
  {/items}
</table>