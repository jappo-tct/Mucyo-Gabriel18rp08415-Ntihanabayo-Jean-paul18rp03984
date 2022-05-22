<?php
require 'db.php';
$sql = 'SELECT * FROM accomodated_students';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header1.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All accomodated students</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>NAMES</th>
          <th>REG.NUMBER</th>
          <th>ROOM</th>
          
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->names; ?></td>
            <td><?= $person->regnumber; ?></td>
            <td><?= $person->room; ?></td>
           
          
      
            

          </tr>
          
        <?php endforeach; ?>
      </table>
     
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>


