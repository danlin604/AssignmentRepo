<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Price</th>
      <th class="mdl-data-table__cell--non-numeric">Stock</th>
    </tr>
  </thead>

  {items}
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{name}</td>
      <td>${price}</td>
      <td>{currAvail}</td>
    </tr>
  </tbody>
  {/items}
  
</table>