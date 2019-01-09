<?php

$meta=[];
$meta['title']='Thank You';
$meta['description']='Thank you for submitting the form successfully.';

$content = <<<EOT

<main>
  <h1>Thanks!</h1>
  <p>Thank you for contacting me, I'll get back to you ASAP!</p>
</main>

EOT;
require '../core/layout.php';
