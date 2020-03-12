<?php require_once('../../../private/initialize.php'); ?>

<?php
    $id = $_GET['id'] ?? '1';
    echo h($id);

?>
<br/>

<a href="show.php?name=<?php echo u('Jaehan Bae') ?>">Link</a>
<a href="show.php?company=<?php echo u('Widget&More') ?>">Link</a>
<a href="show.php?query=<?php echo u('!#*?') ?>">Link</a>
