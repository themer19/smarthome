@extends('layouts.Sideuser')
@section('content')

    <!-- Inclure les liens vers les fichiers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container mt-5">
    <h2 class="mb-4">Formulaire de Réclamation</h2>
    
    <form>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Réclamation:</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Entrez votre réclamation"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer la Réclamation</button>
    </form>
</div>

<!-- Inclure les scripts Bootstrap (jQuery et Popper.js sont requis) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>






@endsection