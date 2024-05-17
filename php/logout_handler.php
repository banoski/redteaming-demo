<?php
session_start();
session_unset();
session_destroy();

// gibt meldung aus, bevor weitergeleitet wird
echo "<script type='text/javascript'> 
    alert('Sie haben sich erfolgreich ausgeloggt.'); 
    window.location.href = '/ba/pages/index'; 
</script>";
?>