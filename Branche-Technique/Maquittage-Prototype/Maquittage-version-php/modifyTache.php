<?php

$Title = "<h1 class='py-4'>Modify Tâche</h1>";


// Header Compenent 
ob_start();

?>

<?php
$Header = ob_get_clean();



// Body Compenent
ob_start();

?>


<form>
    <div class="form-group">
        <label for="Nom">Nom de Tâche<span class="text-danger">*</span></label>
        <input type="text" value="Theme Rapport" class="form-control" id="Nom" placeholder="Enter Nom de Tâche">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" value="Lorem ipsum dolor sit amet consectetur" class="form-control" id="Description"
            placeholder="Enter Description">
    </div>
</form>

<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<div class="">
    <a href="tache.php" class="btn btn-primary me-2">Modify</a>
    <a href="tache.php" class="btn btn-secondary">Cencel</a>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");