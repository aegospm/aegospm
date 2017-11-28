<?php
$banco = "banco_sisaca";
if (!mysqli_select_db($conn, $banco)) {
    die("Erro ao selecionar banco $banco");
}
?>