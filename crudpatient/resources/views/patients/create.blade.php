<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="website icon" href="{{ asset('./iconlogo.png') }}">
    <title>Ajout des Patients</title>
</head>
<body>
<nav class="navbar navbar-light bg-primary p-3">
    <div>
      <a class="navbar-brand" href="#">
        <h2 class="text-light">Hospital</h2>
      </a>
    </div>
  </nav>
  <div  class="container m-2 p-4">
    <h2>Créer un nouveau patient</h2>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom_patient" class="form-label">Nom du patient:</label>
            <input class="form-control w-50 bg-light border-dark" type="text" name="nom_patient" required>
        </div>

        <div class="mb-3">
            <label for="maladies" class="form-label">Maladies:</label>
            @foreach($maladies as $maladie)
                <div class="form-check">
                    <input class="form-check-input border-dark" type="checkbox" name="nom_maladie[]" value="{{ $maladie->id }}" id="maladie_{{ $maladie->id }}">
                    <label class="form-check-label" for="maladie_{{ $maladie->id }}">{{ $maladie->nom_maladie }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">ajouter Patient</button>
        <a href="{{ route('welcome') }}" class="btn btn-primary text-white">Revenir a l'acceuil</a>

    </form>
</div>
    <footer class="bg-body-tertiary text-center text-lg-start">
    <div class="text-center mt-5 p-5 bg-primary text-light">
      © 2024 Copyright:
      <a class="text-light">Hospital</a>
    </div>
  </footer>
</body>
</html>
