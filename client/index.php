<h2>
    <strong><?php echo $_GET['cliente']; ?></strong> Bem vindo à área de cliente
</h2>
<?php 
    $hash64 = base64_encode('1234');
    $md5Base = md5($hash64);
    echo $hash64;
    echo '<br>';
    echo $md5Base;
    echo '<br>';
    echo base64_decode($hash64);
?>