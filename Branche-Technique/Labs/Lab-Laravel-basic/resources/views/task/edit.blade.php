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
                            <h3 class="card-title">Edit Tâche </h3>
                        </div>
                        <form action="{{ route('task.update', ['task' => $Task->id]) }}" method="post">
                            @csrf
                            @method('put')
                            {{-- @method('put') --}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Projet">Projet<span class="text-danger">*</span></label>
                                    <select id="Projet" name="projectName" class="custom-select">
                                        <option name="{{ $Task->projectName }}">{{ $Task->projectName }}</option>
                                        @foreach ($Projects as $Project)
                                            @if ($Project->projectName != $Task->projectName)
                                                <option name="{{ $Project->projectName }}">{{ $Project->projectName }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Projet">Nom <span class="text-danger">*</span></label>
                                    <input type="text" name="taskName"
                                        class="form-control @error('taskName') border-danger @enderror"
                                        value="{{ $Task->taskName }}" id="taskName" placeholder="Enter le name de Tâche">
                                    @error('taskName')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="">Description</label>
                                    <textarea class="form-control @error('description') border-danger @enderror" name="description" rows="3"
                                        placeholder="Entre un Description ">{{ $Task->description }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('task.index') }}" class="btn btn-default">annuler</a>
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
