@forelse ($groupe as $groupe)
    <tr>
        <td>{{ $groupe->nom }}</td>
        <td>{{ Str::limit($groupe->description, 30) }}</td>

        <td class="">
            <a href="{{ route('groupe.show', ['groupe' => $groupe->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-regular fa-eye"></i>
            </a>
            <a href="{{ route('groupe.edit', ['groupe' => $groupe->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <button type="submit" class="btn btn-sm btn-danger" onclick="deletegroupe({{ $groupe->id }})" data-toggle="modal"
                    data-target="#deletegroupe">
                <i class="fa-solid fa-trash"></i>
            </button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3" class="text-center">Aucune tâche trouvée.</td>
    </tr>
@endforelse

<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $groupe->links() }}
        </div>
    </td>
</tr>