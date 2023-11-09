<?php

// Header Compenent 
ob_start();

?>
<div class="card-header">
    <div class="container-fluid ">
        <h1 class="py-4 ">Ajoute Tâche</h1>
    </div>
</div>

<?php
$Header = ob_get_clean();



// Body Compenent
ob_start();

?>


<form>
    <div class="form-group">
        <label for="Nom">Nom de Tâche <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="Nom" placeholder="Enter Nom de Tâche">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" id="Description" placeholder="Enter Description">
    </div>

</form>
<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<div class="">
    <a href="tache.php" class="btn btn-success me-2">Ajouté</a>
    <a href="tache.php" class="btn btn-secondary">Cencel</a>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");