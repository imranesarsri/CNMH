@extends('../Layouts.Layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des tâche</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Ajouter tâche</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            {{-- start alert --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success </strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- end alert --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class=" p-0">
                                <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                    <input type="text" id="table_search" name="table_search"
                                        class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="search_ajax">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Tâche</th>
                                            <th>Projet</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Tasks as $Task)
                                            <tr>
                                                <td>{{ $Task->name }}</td>
                                                <td>{{ $Task->Project->name }}</td>
                                                <td>{{ $Task->description }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('edit', ['task' => $Task->id]) }}"
                                                        class="btn btn-sm btn-default mx-2">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form action="{{ route('destroy', ['task' => $Task->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end align-items-center p-2">
                                <div class="pagination  m-0 float-right">
                                    {{ $Tasks->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scriptSerch')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('keyup', '#table_search', function() {
                let table_search = $(this).val();
                $.ajax({
                    url: "{{ route('ajax_search') }}",
                    type: "post",
                    dataType: "html",
                    cache: false,
                    data: {
                        table_search: table_search,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(data) {
                        $("#search_ajax").html(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error: ' + textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('keyup', '#searchTask', function(e) {
                e.preventDefault();
                let project = document.getElementById('project').value;
                let search = $(this).val();
                console.log(search);
                // let page = $('.pagination').find('.active').text(); // Get the current active page
                $.ajax({
                    url: '{{ route('search.task', ['project' => ':project']) }}'.replace(':project',
                        project),
                    method: 'GET',
                    data: {
                        search: search,
                        project: project,
                    },
                    success: function(data) {
                        $('.table-tasks').html(data.table);
                        $('.pagination').html(data.pagination);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
