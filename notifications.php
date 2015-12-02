<?php
    if(@$_SESSION['msg'] != '')
    {
?>
    <div class="alert alert-success"><?= @$_SESSION['msg']; ?></div>
<?php
    // Destroy notification message
    $_SESSION['msg'] = '';
}
?>