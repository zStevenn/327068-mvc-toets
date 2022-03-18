<h1>
  <a href="/pages/index">Terug naar hoofdpagina</a>
</h1>
<h1>Landenoverzicht</h1>

<!-- Table with overview of countries from database -->
<table>
  <tr>
    <th>id</th>
    <th>Land</th>
    <th>Hoofdstad</th>
    <th>Continent</th>
    <th>Aantal Inwoners</th>
  </tr>
  <?php
  foreach ($data['countries'] as $country) {
    echo "<tr>";
    echo "<td>" . $country->id . "</td>";
    echo "<td>" . $country->name . "</td>";
    echo "<td>" . $country->capitalCity . "</td>";
    echo "<td>" . $country->continent . "</td>";
    echo "<td>" . $country->population . "</td>";
    echo "</tr>";
  }
  ?>
</table>