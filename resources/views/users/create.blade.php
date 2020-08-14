<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email">
    </div>
</form>
