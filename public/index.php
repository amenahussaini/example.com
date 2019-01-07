<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="./dist/css/main.css">-->
  <title>Hello, I am Amena Hussaini</title>
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-white">My Website</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTogg" aria-controls="navTogg"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navTogg">
        <ul class="navbar-nav mr-auto justify-content-end">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="row">
            <div class="col-4">

              <h1 class="display-4">Bob Smith</h1>
              <div class="col-12">
                <img class="img-thumbnail rounded d-block" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64"
                  alt="My Avatar">
              </div>

            </div>


            <p class="lead col-8">
              Hello my name is Bob. I like the codes. The codes are great! Hello my name is Bob. I like the codes. The
              codes
              are great! Hello my name is Bob. I like the codes. The codes are great! Hello my name is Bob. I like the
              codes.
              The codes are great! Hello my name is Bob. I like the codes. The codes are great! Hello my name is Bob. I
              like
              the codes.

            </p>
          </div>

        </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://placeimg.com/640/480/animals" class="card-img-top" alt="cat">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://placeimg.com/640/480/arch" class="card-img-top" alt="arch">
            <div class="card-body">
              <h5 class="card-title">Cat Lovers</h5>
              <p class="card-text">Cats are one of the main primary human pet. To learn more about how to take care and
                train home cat, click on the link below.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://placeimg.com/640/480/nature" class="card-img-top" alt="nature">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

  </main>

  <script>
    var toggleMenu = document.getElementById('toggleMenu');
    var nav = document.querySelector('nav');
    toggleMenu.addEventListener(
      'click',
      function () {
        if (nav.style.display == 'block') {
          nav.style.display = 'none';
        } else {
          nav.style.display = 'block';
        }
      }
    );
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>
