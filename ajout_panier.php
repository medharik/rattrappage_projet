<?php
session_start();
extract($_GET); //$id , $qte
if (isset($_SESSION['panier'])) {
    if (!isset($qte))
        $_SESSION['panier'][$id] =  ['id' =>   $id, 'qte' => 1];
    else {
        $_SESSION['panier'][$id] = ['id' =>   $id, 'qte' => $qte];
    }
} else {

    $_SESSION['panier'] = [];
}

?>
<script>
    history.back();
</script>