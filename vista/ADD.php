<?php

require('templates/Header.php');?>


<h1>form</h1>

<form   method="POST " action=" <?php $_SERVER['PHP_SELF'] ?>"> 
<input type="text" name='title' placeholder="tipo de texto">
<input type="text" name='description' placeholder="descripcion">
<input type="date" name='start_bootcamp' placeholder="fecha de inscripcion">
<input type="text" name='title' placeholder="tipo de texto">

</form>




<?php   require('templates/Footer.php');?> ?>




