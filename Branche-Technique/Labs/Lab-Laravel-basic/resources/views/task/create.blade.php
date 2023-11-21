@extends('../layouts.layout')
@section('content')
    <div class="content-header">
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ajouter Une Tâche</h3>
                        </div>
                        <form action="{{ route('task.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Projet">Projet <span class="text-danger">*</span></label>
                                    <select id="Projet" name="projectName" class="custom-select">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nominputnom1">Nom <span class="text-danger">*</span></label>
                                    <input name="taskName" type="text" class="form-control" id="nominputnom1"
                                        placeholder="Enter le name de Tâche">
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Entre un Description "></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('task.index') }}" class="btn btn-default">annuler</a>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
