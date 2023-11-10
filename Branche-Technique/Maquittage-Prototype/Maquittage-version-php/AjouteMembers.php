<?php

$Title = "<h1 class='py-4'>Ajoute Member</h1>";


// Body Compenent
ob_start();

?>


<form>
    <div class="form-group">
        <label for="Nom">Nom <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="Nom" placeholder="Enter Nom">
    </div>
    <div class="form-group">
        <label for="Prenom">Prenom <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="Prenom" placeholder="Enter Prenom">
    </div>
    <div class="form-group">
        <label for="Nom">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="Nom" placeholder="Enter Nom">
    </div>
    <div class="form-group">
        <label for="Prenom">Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="Prenom" placeholder="Enter Prenom">
    </div>


</form>
<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<div class="">
    <a href="Members.php" class="btn btn-success me-2">Ajoute</a>
    <a href="Members.php" class="btn btn-secondary">Cencel</a>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");