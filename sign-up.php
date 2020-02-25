<?php 
    if(isset($_POST['submit'])){
        echo $_POST['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php 
include('header.php');
?>

<section class="section-form">

<form action="sign-up.php" method="POST">
  <div class="row">
      <h2>sign Up</h2>
  </div>
       <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" id="name" placeholder="Username" required>
      </div>
      <div>
          <label for="email">Email</label><br>
          <input type="email" name="email" id="email" placeholder="Email" required>
      </div>
      <div>
          <label for="Password">Password</label><br>
          <input type="Password" name="Password" id="Password" placeholder="Password" required>
      </div>
      <div class="form-submit">
          <input type="submit" name="submit" value="Send it!">
      </div>

</form>
</section>

<?php include('footer.php')?>
</html>