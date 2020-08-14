<a href="{{ $url_show }}" class="btn-show" title="Detail : {{ $user->name }}">
    <h5 class="d-inline"> <i class="fas fa-eye text-primary"></i></h5>
</a>

<a href="{{ $url_edit }}" class="btn-edit" title="Edit : {{ $user->name }}">
    <h5 class="d-inline m-2"> <i class="fas fa-pencil-alt text-dark"></i></h5>
</a>

<a href="{{ $url_destroy }}" class="btn-delete" title="Delete : {{ $user->name }}">
    <h5 class="d-inline"> <i class="fas fa-trash text-danger"></i></h5>
</a>
