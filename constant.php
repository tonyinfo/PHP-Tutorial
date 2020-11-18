<h1>PHP Constants</h1>
<p>A constant must be defined and identified by a name.  Unlike other variables, as the name ‘constant’ implies, it cannot be changed.</p>
<p>In that case the <b>‘define()’</b> keyword must be used.</p>
<?php
// case-sensitive constant name
define("title", "<h3>Welcome to the London School of Computer Sciencies and Management Studies!</h3>");
echo title;
?>
