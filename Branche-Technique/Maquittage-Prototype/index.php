<?php
$BgColor = "";

// Header Compenent 
ob_start();

?>
<div class="card-header">
    <div class="container-fluid ">
        <h1 class="py-4 ">Gestion de Projet</h1>
        <div class="row d-flex align-items-center ">
            <div class="col-sm-6">
                <a href="AjouteProjet.php" class="btn btn-success">Ajouté Projets</a>
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
            <th>Nom Du Projet</th>
            <th>Date De Début</th>
            <th>Date De Fin</th>
            <th style="width:500px; max-width: 500px;">Description</th>
            <th>Tâche</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="">Planéfication CNMH</td>
            <td class="">2023-11-08</td>
            <td class="">2023-11-10</td>
            <td class="">
                Lorem ipsum dolor sit amet consectetur,
            </td>
            <td class="text-center">
                <a href="./tache.php" class="bg-light py-1 px-2 rounded"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./modifyProject.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">front end </td>
            <td class="">2023-11-11</td>
            <td class="">2023-11-15</td>
            <td class="">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </td>
            <td class="text-center">
                <a href="./tache.php" class="bg-light py-1 px-2 rounded"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./modifyProject.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">maquettage</td>
            <td class="">2023-11-16</td>
            <td class="">2023-11-20</td>
            <td class="">
                Dolor optio culpa eos totam consectetur animi,
            </td>
            <td class="text-center">
                <a href="./tache.php" class="bg-light py-1 px-2 rounded"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./modifyProject.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">back end </td>
            <td class="">2023-11-21</td>
            <td class="">2023-11-24</td>
            <td class="">
                nam eaque, vero praesentium ullam quam modi iure iusto tempora reiciendis
                debitis ipsa, rerum
                commodi.
            </td>
            <td class="text-center">
                <a href="./tache.php" class="bg-light py-1 px-2 rounded"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./modifyProject.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">database</td>
            <td class="">2023-11-25</td>
            <td class="">2023-11-27</td>
            <td class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem expedita ea
                aliquam iure cumque
                necessitatibus sequi porro illo vero sint suscipit eligendi, facere dolorum
                recusandae animi.
                Inventore nihil consequuntur quisquam!
            </td>
            <td class="text-center">
                <a href="./tache.php" class="bg-light py-1 px-2 rounded"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="./modifyProject.php" class="bg-primary py-1 px-2 rounded"><i
                        class="fa-solid fa-pencil"></i></a>
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
<div>
    <button class="btn btn-light"><i class="fa-solid fa-upload"></i> Exporter</button>
    <button class="btn btn-light"><i class="fa-solid fa-download"></i> Importer</button>
</div>
<?php
$Footer = ob_get_clean();

include("layout.php");