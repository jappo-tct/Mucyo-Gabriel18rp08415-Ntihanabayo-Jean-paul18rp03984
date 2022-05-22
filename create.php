<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['regno']) && isset($_POST['room'])) {
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $regno = $_POST['regno'];
  $room = $_POST['room'];
  $sql = 'INSERT INTO students(name, lname, phone, regno, room) VALUES(:name, :lname, :phone, :regno, :room)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':lname' => $lname , ':phone' => $phone, ':regno' => $regno, ':room'=>$room])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>DESKTOP BORROWING APPLICATION FORM</h2>
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
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="lname">LAST NAME</label>
          <input type="text" name="lname" id="lname" class="form-control">
        </div>
  <div class="form-group">
          <label for="phone">PHONE</label>
          <input type="text" name="phone" id="phone" class="form-control">
        </div>
          <div class="form-group">
          <label for="regno">REG NUMBER</label>
          <input type="text" name="regno" id="regno" class="form-control">
        </div>
          <div class="form-group">
          <label for="room">ROOM</label>
          <input type="text" name="room" id="room" class="form-control">
        </div>
         

        <div class="form-group">
          <button type="submit" class="btn btn-info">APPLY</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>
