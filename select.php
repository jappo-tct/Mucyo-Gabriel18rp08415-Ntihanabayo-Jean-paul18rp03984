<?php
require 'db.php';
$sql = 'SELECT * FROM students';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header1.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>

      
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Firstame</th>
          <th>Lastname</th>
          <th>Phone</th>
          <th>Reg.number</th>
          <th>Room</th>
          <th>MACHINE</th>
          <th>Approve</th>
           <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->lname; ?></td>
            <td><?= $person->phone; ?></td>
            <td><?= $person->regno; ?></td>
            <td><?= $person->room; ?></td>
            <td><?= $person->machine_name; ?></td>
          
            <td><?= $person->approve; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>

          </tr>
          
        <?php endforeach;  ?>
      </table>          
     
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>


