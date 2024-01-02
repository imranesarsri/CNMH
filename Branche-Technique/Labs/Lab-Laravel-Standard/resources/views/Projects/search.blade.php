@foreach ($projects as $project)
    <tr>
        <td>{{ $project->name }}</td>
        <td>{{ Str::limit($project->description, 50) }} <a href="{{ route('project.show', $project->id) }}">read
                more...</a></td>

        {{-- <td>{{ $Project->project->name }}</td> --}}


        <td class="">
            <a href="{{ route('task', ['task' => $project->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-eye"></i>
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $projects->links() }}
        </div>

    </td>
</tr>
