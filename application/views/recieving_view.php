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
  </tr>
  {items}
  <tr>
    <td>{id}</td>
    <td>{Desc}</td>
    <td>{receiving_unit}</td>
  </tr>
  {/items}
</table>