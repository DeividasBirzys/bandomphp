
<html>
  <head>
      <title> PHP lydes ir <?php print date('l', strtotime ('+1 day')) . '!';?> </title>
  </head>
  <body>
      <h1><strong>Deividas</strong> - PHP su manim buvo ir <?php print date ('H', strtotime('-1 hour')) . ' valanda' ; ?> </h1>
    <p> <?php print date('Y', strtotime ('+1 year')); ?> ne uz kalnu </p>
    
  </body>
</html>
