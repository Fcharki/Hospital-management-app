<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="website icon" href="{{ asset('./iconlogo.png') }}">
    <title>Welcome</title>
    <style>
      img{
        height: 500px;
        margin: 6px;
        padding: 4px;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-light bg-primary p-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <h2 class="text-light">Hospital</h2>
      </a>
    </div>
  </nav>
  <main class="container m-2 p-4 text-center bg-light min-vh-200">
  <div>
    <h1 class="display-5 fw-bold">Welcome to the Patient Management System!</h1>
    <p class="display-5">Manage patients and their associated diseases with ease.</p>
    <hr class="my-4">
    <p>Click below to get started.</p>
    <a href="{{ route('patients.create') }}" class="btn btn-success mx-2">Add new patient</a>
    <a class="btn btn-primary mx-3" href="{{ route('patients.index') }}" role="button">View Patients</a><br/>
    <img src="{{ asset('./hospital.jpg') }}" alt="hospital image">
  </div>
  </main>
 
  <footer class="bg-body-tertiary text-center text-lg-start">
    <div class="text-center mt-5 p-5 bg-primary text-light">
      © 2024 Copyright:
      <a class="text-light">Hospital</a>
    </div>
  </footer>

</body>
</html>
