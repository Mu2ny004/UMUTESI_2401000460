<!DOCTYPE html>
<html>
     <head> 
          <meta charset="utf-8">

          <title> Class work 
</title>
</head>
<body>
     <?php
     $sentence="The main body of a book";
     echo strtoupper($sentence);
     echo strtolower($sentence);
     echo strlen ($sentence);
     echo $sentence[0];
     $sentence[0]="U";
     echo $sentence;
     echo str_replace("book", "college", $sentence);
     
     
    
     ?>
</body>
</html>