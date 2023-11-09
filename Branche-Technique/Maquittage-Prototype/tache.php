<?php

// Header Compenent 
ob_start();

?>


<div class="card-header">
    <div class="container-fluid ">
        <h1 class="py-4 ">Gestion de Tâches</h1>
        <div class="row d-flex align-items-center ">
            <div class="col-sm-6">
                <a href="AjouteTache.php" class="btn btn-success">Ajouté Tâches</a>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <select class="form-select" aria-label="Default select example">
                        <option value="Projet1">Planéfication CNMH</option>
                        <option value="Projet2">front end</option>
                        <option value="Projet2">back end</option>
                        <option value="Projet3">maquettage</option>
                        <option value="Projet4">database</option>
                    </select>
                    <button type="button" class="btn btn-primary">Recherche</button>
                </div>
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
            <th> Nom de la tâche</th>
            <th>description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="">Theme Rapport</td>
            <td class="">
                Lorem ipsum dolor sit amet consectetur,
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>

        <tr>
            <td class="">Thème de présentation</td>
            <td class="">
                eveniet quae quos expedita mollitia. Recusandae quam minus totam
                incidunt
                maiores eligendi earum!
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>

        <tr>
            <td class="">Chapitre - Diagramme de contexte</td>
            <td class="">
                Suscipit hic aliquid vitae in velit debitis accusantium dicta qui
                obcaecati
                labore
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
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