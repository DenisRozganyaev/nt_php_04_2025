<?php
$name = 'John';
?>

<html>
<body>
<?php if (isset($name)): ?>
    <p><?= $name ?></p>
<?php endif; ?>
</body>
</html>

<?php

// $info = if (isset($name)) { ['name' => $name] } else { null; }
$info = isset($name) ? ['name' => $name] : null;
$info = $name ?? null; // if (isset($name)) { $name } else { null; }