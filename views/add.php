<?php require('t/header.php'); ?>

<h1>formulario</h1>

<form action="" method="post"><?php  $_SERVER['PHP_SELF'] ?><br><br>
<input type="text" name="title" placeholder="escribe tu texto"><br><br>
<input type="text" name="description" placeholder="descrpcion"><br><br>
<input type="date" name="start_bootcamp" placeholder="inicio del bootcamp"><br><br>
<input type="date" name="end_bootcamp" placeholder="fin del bootcamp"><br><br>
<input type="number" name="models"  placeholder="modelo"><br><br>

<button type="submit">agregar un nuevo bootcamp</button>





</form>



<?php    require('t/footer.php'); ?>















