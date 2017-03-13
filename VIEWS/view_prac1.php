<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
  </head>
  <body>
    <h1>Practicle 1 Student Transcripts</h1>
    <hr>
    <p>
    <?php
    //use resultsets to generate HTML tables
    include("FORMS/queryStudentTranscriptsForm.html");
    ?>
    </p>
    <hr>
  </body>
  <a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</html>
