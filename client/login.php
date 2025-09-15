<div class="container">
  <h1 class="heading head">Login</h1>
  <form id="login" action="./server/requests.php" method="post" novalidate>

   <!-- <div class="col-6 offset-sm-3 margin-bottom-15 us us-1" >
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control us"  id="email" placeholder="Enter User Email" >
  </div> -->

   <div class="col-6 offset-sm-3 margin-bottom-15 us us-1">
      <label for="email" class="form-label">User Email</label>
      <input type="email" name="email" id="email"
             class="form-control"
             placeholder="enter user email"
             required>
      <div class="invalid-feedback">Please enter a valid email.</div>
    </div>

   <div class="col-6 offset-sm-3 margin-bottom-15 us us-1">
      <label for="password" class="form-label">User Password</label>
      <input type="password" name="password" id="password"
             class="form-control"
             placeholder="enter user password"
             required minlength="6">
      <div class="invalid-feedback">Password must be at least 6 characters.</div>
    </div>

  <div class="col-6 offset-sm-3 margin-bottom-15 us us-1">
     <button type="submit" name="login" class="btn btn-secondary">Login</button>
  </div>
 
 
</form>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('login');

  form.addEventListener('submit', function (e) {
    // Check built-in constraints
    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
    }

    // Optional: custom password check (example)
    const password = document.getElementById('password').value;
    if (password.length < 6) {
      e.preventDefault();
      e.stopPropagation();
      alert('Password must be at least 6 characters long.');
    }

    form.classList.add('was-validated');
  });
});
</script>