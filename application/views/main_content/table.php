<table class="table">
  <thead>
    <?php
      foreach ($heading as $value) {
        echo "<th id='heading-table'>" . $value . "</th>";
      }
     ?>
  </thead>
  <tbody>
    <?php
      foreach ($hasil->result_array() as $value) {
        echo "<tr>
                <td id='table-first-column'>" . $value['id'] . "</td>
                <td>" . $value['descriptions'] . "</td>
              </tr>";
      }
     ?>
  </tbody>
</table>
