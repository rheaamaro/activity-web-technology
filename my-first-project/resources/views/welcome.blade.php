<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel + Bootswatch Theme</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap-lux.min.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
<div class="container">
<a class="navbar-brand" href="#">ACT Bootswatch App</a>
<span class="navbar-text">Theme Showcase</span>
</div>
</nav>
<div class="container my-4">

<div class="alert alert-dismissible alert-success">
<strong>Theme Active!</strong> You have successfully integrated a custom Bootswatch
theme into Laravel.
</div>

<div class="card border-primary mb-4">
<div class="card-header">Bootswatch Integration Test</div>
<div class="card-body">
<h4 class="card-title">Custom Typography & Button Styles</h4>
<p class="card-text">Notice how the font family, button radii, and color accents
match your chosen theme effortlessly.</p>
<button class="btn btn-primary" type="button">Primary Button</button>
<button class="btn btn-secondary" type="button">Secondary</button>
<button class="btn btn-success" type="button">Success</button>
</div>

</div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>