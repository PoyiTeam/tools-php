<?php
$permission = 1;
if ($permission === 1) {
    echo "<h3>hello - 1</h3>";
}
?>

<?php
$permission = 1;
if ($permission === 1) {
    ?>
    <h3>hello - 1</h3>
    <?php
}
?>

<?php $permission = 2; ?>
<?php if ($permission === 1): ?>
    <h3>hello - 1</h3>
<?php elseif ($permission === 2): ?>
    <h3>hello - 2</h3>
<?php else: ?>
    <h3>hello else</h3>
<?php endif; ?>