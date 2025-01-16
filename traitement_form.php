<?php
    
    session_start();
   
  
    include_once __DIR__ ."/controller/config.inc.php";
    
?>
<body>

<header>
    <h1>🧑‍💻 Bonjour </h1>
</header>
                 
<div class="form-action" role="group" aria-labelledby="form">
    <p class="warning-connection">
      <?php
           include_once __DIR__ . "./controller/connected.class.php";
          
      ?> 
    </p>
</div>
<footer>
    <p>
        &copy; - MIT - 2024
    </p>
</footer>

</body>

</html>
