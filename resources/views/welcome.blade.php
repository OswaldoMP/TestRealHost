<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="card text-center">
  <div class="card-header">
  <h1>Encrypt and Decrypt</h1>  </div>
  <div class="card-body">
  <form method="POST" action="/encrypt">
    @csrf
  <div class="row mb-3">
    <label for="data" class="col-sm-2 col-form-label">Cadena: </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="data" name="data" value="{{ $data }}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEncrypt" class="col-sm-2 col-form-label">Encrypt: </label>
    <div class="col-sm-5">
      <input class="form-control" id="inputEncrypt" name="encrypt" value="{{ $encrypt }}" readonly="true">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputDecrypt" class="col-sm-2 col-form-label">Decrypt: </label>
    <div class="col-sm-5">
      <input class="form-control" id="inputDecrypt" name="decrypt" value="{{ $decrypt }}" readonly="true">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Option: </legend>
    <div class="col-sm-1">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="option" id="encrypt" value="encrypt" checked>
        <label class="form-check-label" for="encrypt">
          Encrypt
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="option" id="decrypt" value="decrypt">
        <label class="form-check-label" for="decrypt">
          Decrypt
        </label>
      </div>
    </div>
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Send</button>
</form>
  </div>
  <div class="card-footer text-muted">
    Adrian Oswaldo Morales Pérez
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>