<html>

<h3>Checkbox</h3>
<form action="" method="post">
<input type="hidden" name="status_1" value="0" />
<input type="checkbox" id="status_1" name="status_1" value="1" />

<input type="hidden" name="status_2" value="0" />
<input type="checkbox" id="status_2" name="status_2" value="1" />

<input type="hidden" name="status_3" value="0" />
<input type="checkbox" id="status_3" name="status_3" value="1" />
<input type="submit" />
</form>
<?php
var_dump($_POST);
/*
 * checking only the second box outputs:
 * 
 * array (size=3)
  'status_1' => string '0' (length=1)
  'status_2' => string '1' (length=1)
  'status_3' => string '0' (length=1)
 */?>
 
 </html>