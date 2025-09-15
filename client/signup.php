<div class="container">
  <h1 class="heading head">Signup</h1>
  <form id="signupForm" method="post" action="./server/requests.php" novalidate>
    <div class="col-6 offset-sm-3 margin-bottom-15 us us-1">
      <label for="username" class="form-label">User Name</label>
      <input type="text" name="username" id="username"
             class="form-control"
             placeholder="enter user name"
             required minlength="3">
      <div class="invalid-feedback">Please enter at least 3 characters.</div>
    </div>

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
      <label for="address" class="form-label">User Address</label>
      <input type="text" name="address" id="address"
             class="form-control"
             placeholder="enter user address"
             required>
      <div class="invalid-feedback">Address is required.</div>
    </div>

    <div class="col-6 offset-sm-3 mb-3">
      <button type="submit" name="signup" class="btn btn-secondary">Signup</button>
    </div>
  </form>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('signupForm');

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
