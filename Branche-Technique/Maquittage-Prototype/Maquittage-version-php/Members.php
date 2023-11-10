<?php

$Title = "<h1 class='py-4'>Gestion de Member</h1>";

// Header Compenent 
ob_start();

?>
<div class="card-header bg-white">
    <div class="row d-flex align-items-center ">
        <div class="col-sm-6">
            <a href="AjouteMembers.php" class="btn btn-success">Ajouté Member</a>
        </div>
        <div class="col-sm-6">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-primary">Recherche</button>
            </div>
        </div>
    </div>
</div>

<?php
$Header = ob_get_clean();



// Body Compenent
ob_start();

?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Premon</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="">sarsri</td>
            <td class="">imrane</td>
            <td class="">imrane.sarsri@gmail.com</td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./ModifyMembers.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">agren</td>
            <td class="">reda</td>
            <td class="">agren.reda@gmail.com</td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./ModifyMembers.php" class="bg-primary py-1 px-2 rounded">
                    <i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">mstafa</td>
            <td class="">lhadi</td>
            <td class="">lhadi0099qq@gmail.com</td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./ModifyMembers.php" class="bg-primary py-1 px-2 rounded">
                    <i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
    </tbody>
</table>
<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<ul class="pagination pagination-sm m-0 float-right">
    <li class="page-item"><a class="page-link" href="#">«</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>

<?php
$Footer = ob_get_clean();

include("layout.php");