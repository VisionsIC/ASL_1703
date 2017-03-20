
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM & HTML</title>
  </head>
  <body>
<?php
   echo Form::open(['url' => 'foo/bar']);
    echo Form::text('username','username');
    echo '<br/>';
    echo Form::text('email','yourmail@here.com');
    echo '<br/>';
    echo Form::password('password');
    echo '<br/>';
    echo Form::checkbox('name','value');
    echo '<br/>';
    echo Form::radio('name','value');
    echo '<br/>';
    echo Form::file('image');
    echo '<br/>';
    echo Form::select('Gender',['P'=>'perempuan','L'=> 'Laki-laki']);
    echo '<br/>';
    echo Form::submit('Register Now');
  echo Form::close(); ?>
</body>
</html>