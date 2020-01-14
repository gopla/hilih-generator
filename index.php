<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- Local CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Hilih Generator - gopla</a>
      </div>
    </nav>
    <div class="kotak"></div>
    <div class="container">
      <textarea
        name="input"
        id="input"
        rows="10"
        class="form-control"
      ></textarea>
      <textarea
        name="output"
        id="output"
        rows="10"
        class="form-control"
      ></textarea>
      <input
        type="submit"
        value="Reset"
        id="btn-reset"
        class="btn btn-primary"
      />
    </div>
    <!-- JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- Local JS -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>
