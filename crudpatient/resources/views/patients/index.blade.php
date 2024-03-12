<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="website icon" href="{{ asset('./iconlogo.png') }}">
    <title>Patients List</title>
</head>
<body>
<nav class="navbar navbar-light bg-primary p-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <h2 class="text-light">Hospital</h2>
      </a>
    </div>
  </nav>
  <div class="container m-2 p-4">
    <h2>Patients List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom du Patient</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <th scope="row">{{ $patient->id }}</th>
                <td>{{ $patient->nom_patient }}</td>
                <td>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('patients.create') }}" class="btn btn-success">Ajouter un Patient</a>
    <a href="{{ route('welcome') }}" class="btn btn-primary text-white">Revenir a l'acceuil</a>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">
    <div class="text-center mt-5 p-5 bg-primary text-light">
      © 2024 Copyright:
      <a class="text-light">Hospital</a>
    </div>
  </footer>
</body>
</html>
