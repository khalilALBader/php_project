<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('/css/form.css') ?>">
</head>
<body>
  <div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="auth-card">
          <div class="row g-0">
            <!-- Image Section -->
            <div class="col-lg-6 auth-image d-none d-lg-block">
              <div class="image-text">
                <h2>Join Our Community</h2>
                <p>Start your journey with us</p>
              </div>
            </div>
            
            <!-- Form Section -->
            <div class="col-lg-6">
              <div class="auth-content">
                <h3 class="mb-4 fw-bold">Create New Account</h3>
                
                <!-- Error Messages -->
                <?php if (isset($_GET['error'])): ?>
                  <div class="alert alert-danger mb-3">
                    <?php 
                      $error_messages = [
                        'emptyInput' => 'Please fill in all fields',
                        'invalidEmail' => 'Invalid email format',
                        'invalidName' => 'Name must be 2-50 letters',
                        'userEmailMatch' => 'Name and email cannot be same',
                        'dberror' => 'Email alred existed',
                        'not_match_password'=>'passwerd and conferm password not match'
                      ];
                      echo $error_messages[$_GET['error']] ?? 'An error occurred';
                    ?>
                  </div>
                <?php endif; ?>

                <form action="/signup" method="post">
                  <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Your Name" required
                           pattern="[a-zA-Z ]{2,50}" title="2-50 letters only">
                  </div>
                  <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="mb-4">
                    <input name="password" type="password" class="form-control" 
                           placeholder="Create Password (min 8 chars)" required minlength="8">
                  </div>
                  <div class="mb-4">
                    <input name="conferm_passwoed" type="password" class="form-control" 
                           placeholder="conferm_passwoed" required minlength="8">
                  </div>
                  <button name="submit" class="btn btn-primary w-100 mb-3">Sign Up →</button>
                </form>

                <div class="mt-4 text-center">
                  <p class="text-muted">Already have an account? 
                    <a href="/login" class="auth-link fw-semibold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>