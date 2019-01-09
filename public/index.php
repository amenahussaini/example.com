<?php

$meta=[];
$meta['title']='Homepage';
$meta['description']='The main page of the website';

$content = <<<EOT

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

EOT;
require '../core/layout.php';
