@forelse ($filier as $filier)
    <tr>
        <td>{{ $filier->nom }}</td>
        <td>{{ Str::limit($filier->description, 30) }}</td>

        <td class="">
            <a href="{{ route('filier.show', ['filier' => $filier->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-regular fa-eye"></i>
            </a>
            <a href="{{ route('filier.edit', ['filier' => $filier->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <button type="submit" class="btn btn-sm btn-danger" onclick="deletefilier({{ $filier->id }})" data-toggle="modal"
                    data-target="#deletefilier">
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
            {{ $filier->links() }}
        </div>
    </td>
</tr>