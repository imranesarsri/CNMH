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
                                    <select name="projectName" id="Projet" class="custom-select">
                                        @foreach ($Projects as $Project)
                                            <option value="{{ $Project->projectName }}">{{ $Project->projectName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nominputnom1">Nom <span class="text-danger">*</span></label>
                                    <input name="taskName" type="text"
                                        class="form-control @error('taskName') border-danger @enderror" id="nominputnom1"
                                        placeholder="Enter le name de Tâche" value="{{ old('taskName') }}">
                                    @error('taskName')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Description</label>
                                    <textarea class="form-control @error('description') border-danger @enderror" name="description" rows="3"
                                        placeholder="Entre un Description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
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
