<?php
    $s_m = isset($_SESSION['success_msg']) ? $_SESSION['success_msg'] : null ;
    $e_m = isset($_SESSION['error_msg']) ? $_SESSION['error_msg'] : null;
?>
<?php if(isset($s_m) && !empty($s_m)): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $s_m; ?> 
    </div>
<?php endif; ?>

<?php if(isset($e_m) && !empty($e_m)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $e_m; ?> 
    </div>
<?php endif; ?>

<!-- reset session messages -->
<?php
    $_SESSION['success_msg']=null;
    $_SESSION['error_msg']=null;
?>