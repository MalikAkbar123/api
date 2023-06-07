<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  </head>
  <body>
   <div class="d-flex justify-content-center align-items-center container">
    <form>
        <fieldset disabled>
          <legend>jual beli{{$customers['name']}}</legend>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nama</label>
            <input type="text" id="disabledTextInput" class="form-control" value="{{$customers['name']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_number</label>
            <input type="number" id="disabledTextInput" class="form-control" value="{{$customers['id_number']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Tanggal pembelian</label>
            <input type="text" id="disabledTextInput" class="form-control"  value="{{$customers['delivery_Date']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">email</label>
            <input type="text" id="disabledTextInput" class="form-control" value="{{$customers['email']}}">
          </div>
        </fieldset>
        <a href="/students" class="btn btn-primary">Back</a>
      </form>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>