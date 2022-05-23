<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM students WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['lname'])  && isset($_POST['phone']) && isset($_POST['regno']) && isset($_POST['room']) && isset($_POST['approve'])) {
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $regno = $_POST['regno'];
  $room = $_POST['room'];
  $machine_name = $_POST['machine_name'];
  $approve = $_POST['approve'];
  $sql = 'UPDATE students SET name=:name, lname=:lname, phone=:phone, regno=:regno, room=:room,machine_name=:machine_name, approve=:approve WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':lname' => $lname,':phone' => $phone,':regno' => $regno,':room' => $room,':machine_name' => $machine_name,':approve' => $approve,':id' => $id])) {
    header("Location: select.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="lname">LASTNAME</label>
          <input type="text" value="<?= $person->lname; ?>" name="lname" id="lname" class="form-control">
        </div>
<div class="form-group">
          <label for="phone">PHONE</label>
          <input type="text" value="<?= $person->phone; ?>" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="regno">REG NUMBER</label>
          <input type="text" value="<?= $person->regno; ?>" name="regno" id="regno" class="form-control">
        </div>
        <div class="form-group">
          <label for="room">ROOM</label>
          <input type="text" value="<?= $person->room; ?>" name="room" id="room" class="form-control">
        </div>

        <div class="form-group">
          <label for="room">MACHINE</label>
          <input type="text" value="<?= $person->machine_name; ?>" name="machine_name" id="machine_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="approve">APPROVE</label>
          <input type="text" value="<?= $person->approve; ?>" name="approve" id="approve" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">UPDATE</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
