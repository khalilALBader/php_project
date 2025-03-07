<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
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
                <h2>Welcome Back</h2>
                <p>Continue your journey with us</p>
              </div>
            </div>
            
            <!-- Form Section -->
            <div class="col-lg-6">
              <div class="auth-content">
                <h3 class="mb-4 fw-bold">Sign In to Continue</h3>
                <?php if (isset($_SESSION['errors'])): ?>
                  <div class="alert alert-danger"><?= $_SESSION['errors'] ?></div>
                <?php endif; ?>
                <form action="/login" method="post">
                  <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="mb-4">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <button name="submit" class="btn btn-primary w-100 mb-3">Sign In →</button>
                </form>

                <div class="mt-4 text-center">
                  <p class="text-muted">New here? 
                    <a href="/signup" class="auth-link fw-semibold">Create account</a>
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