<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Daily Weather & To-Do</title>
    <!-- Lux Bootswatch Theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-lux.min.css') }}">
    <!-- Bootstrap Icons (optional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-cloud-sun me-2"></i>Daily Weather & To-Do
            </a>
        </div>
    </nav>

    <!-- Login Form — Fully Responsive -->
    <div class="container py-4">
        <div class="row justify-content-center">
            <!-- Responsive Column: Full width on mobile, 40% on desktop -->
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="mb-0"><i class="bi bi-lock-fill me-2"></i>Sign In</h3>
                        <p class="mb-0 opacity-75 small">Access your weather & tasks dashboard</p>
                    </div>

                    <div class="card-body p-4 p-sm-5">
                        <form>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label fw-medium">Email address</label>
                                <input type="email" class="form-control form-control-lg" id="email" 
                                       placeholder="you@example.com" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" 
                                       placeholder="Enter your password" required>
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <!-- Sign In Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                            </div>
                        </form>

                        <hr class="my-4">

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-muted mb-0">Don't have an account? 
                                <a href="#" class="text-primary fw-medium">Register here</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS for interactivity -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>