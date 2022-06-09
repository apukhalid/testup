<html>
   <body>
      <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('csv');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>
   </body>
</html>