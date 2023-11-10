<?php

$Title = "<h1 class='py-4'>Modify projet</h1>";


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
        <label for="Nom">Nom de projet <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="Planéfication CNMH" id="Nom" placeholder="Enter Nom de projet">
    </div>
    <div class="form-group">
        <label for="DateDeDebut">Date De Début <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="2023-11-08" id="DateDeDebut" placeholder="Enter Date De Début">
    </div>
    <div class="form-group">
        <label for="DateDeFin">Date De Fin <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="2023-11-15" id="DateDeFin" placeholder="Enter Date De Fin">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" value="Lorem ipsum dolor sit amet consectetur,	" id="Description"
            placeholder="Enter Description">
    </div>

</form>
<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<div class="">
    <a href="index.php" class="btn btn-primary me-2">Modify</a>
    <a href="index.php" class="btn btn-secondary">Cencel</a>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");