<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container bg- mt-5 d-flex justify-content-between card-body">
        <form action="{{route('carwash.index')}}" method="POST" enctype="multipart/form-data">
      <a onclick="return confirm('Voulez-vous annuler l\'ajoute d\'un employee ?');" href="{{route('carwash.index')}}" class="btn btn-secondary btn-lg my-3">Précedent </a>
      <button class="btn btn-primary btn-lg my-3">Envoyer</button>
                @csrf
                  <div class="form-row row ms-5 row">
                      <div class="form-group col-md-4 me-5">
                          <label for="nom">Nom</label>
                          <input type="text" class="form-control" name="nom" placeholder="Nom">
                      </div>
                      <div class="form-group col-md-4">
                          <label for="prenom">Prénom</label>
                          <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                      </div>
                  </div>
                  <div class="form-row row ms-5">
                      <div class="form-group col-md-4 me-5 ">
                          <label for="cin">CIN</label>
                          <input type="text" class="form-control" name="cin" placeholder="CIN">
                      </div>
                      <div class="form-group col-md-4 ">
                          <label for="tel">Téléphone</label>
                          <input type="text" class="form-control" name="tel" placeholder="Téléphone">
                      </div>
                  </div>
                  <div class="form-row row ms-5">
                      <div class="form-group col-md-4 me-5 ">
                          <label for="adresse">Adresse</label>
                          <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                      </div>
                      <div class="form-group col-md-4 ">
                          <label for="ville">Ville</label>
                          <input type="text" class="form-control" name="ville" placeholder="Ville">
                      </div>
                  </div>
                  <div class="form-row row ms-5">
                      <div class="form-group col-md-4 me-5 ">
                          <label for="gmail">Email</label>
                          <input type="email" class="form-control" name="gmail" placeholder="Email">
                      </div>
                      <div class="form-group col-md-4 ">
                          <label for="date_naissance">Date de Naissance</label>
                          <input type="date" class="form-control" name="date_naissance" placeholder="Date de Naissance">
                      </div>
                  </div>
                  <div class="form-row row ms-5">
                      <div class="form-group col-md-4 me-5 ">
                          <label for="type_permis">Type de Permis</label>
                          <select name="type_permis" id="" class="form-control">
                            <option selected value="">Choisir type de permis </option>
                            <option  value="B">B</option>
                            <option  value="C1">C1</option>
                            <option  value="BE">BE</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-row row ms-5">
                      <div class="form-group col-md-4 mt-5">
                          <label for="copy_cin">Photo CIN</label>
                          <input type="file" class="form-control-file" name="copy_cin">
                      </div>
                      <div class="form-group col-md-4 mt-5">
                          <label for="copy_permis">Photo Permis</label>
                          <input type="file" class="form-control-file" name="copy_permis">
                      </div>
                      <div class="form-group col-md-4 mt-5">
                          <label for="photo">Photo Personnel</label>
                          <input type="file" class="form-control-file" name="photo">
                      </div>
                  </div>
                  
                  {{-- <button type="button" class="btn btn-secondary" onclick="history.back()">Précédent</button> --}}
              </form>
          </div>
</body>
</html>