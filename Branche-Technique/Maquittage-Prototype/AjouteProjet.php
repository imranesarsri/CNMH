<?php

// Header Compenent 
ob_start();

?>
<div class="card-header">
    <div class="container-fluid ">
        <h1 class="py-4 ">Ajoute projet</h1>
    </div>
</div>

<?php
$Header = ob_get_clean();



// Body Compenent
ob_start();

?>


<form>
    <div class="form-group">
        <label for="Nom">Nom de projet <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="Nom" placeholder="Enter Nom de projet">
    </div>
    <div class="form-group">
        <label for="DateDeDebut">Date De Début <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="DateDeDebut" placeholder="Enter Date De Début">
    </div>
    <div class="form-group">
        <label for="DateDeFin">Date De Fin <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="DateDeFin" placeholder="Enter Date De Fin">
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
    <a href="index.php" class="btn btn-success me-2">Ajouté</a>
    <a href="index.php" class="btn btn-secondary">Cencel</a>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");