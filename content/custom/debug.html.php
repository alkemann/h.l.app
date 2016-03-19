<h1> Start page</h1>
<?php if (DEBUG) : ?>
<h2>Defines are : </h2>
<?php
dw('defines');
?>
<h2>SERVER are :</h2>
<?php d($_SERVER);
else : ?>
<p>Debug mode is off </p>
<?php endif; ?>
