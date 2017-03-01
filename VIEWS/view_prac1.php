<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Practicle 1 Student Transcripts</h1>
    <hr>

    <?php
    //use resultsets to generate HTML tables
    include("FORMS/queryStudentTranscriptsForm.html");

    ?>
    <hr>
  </body>
  <a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</html>
