<?php


include("menu.php");

?>
<form method="post" action="mpag.php">
<button name="unsess">Logout</button>
</form>
</div>
<hr>
<script>
if($_POST["unsess"] == true){
<?php
session_abort();
session_destroy();
header('index.php')
?>
}

</script>
</body>

</html>