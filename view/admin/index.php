<?php
print 'admin index sayfası';


print_R($users);
?>


<form action="/userAdd" method="post">


<input type="text" name="username">
<input type="text" name="password">

<input type="submit" value="Ekle">

</form>