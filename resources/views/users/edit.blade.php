<form action="{{ route('user.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" type="text" name="name" value="{{old('name') ?? $user->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email" value="{{old('email') ?? $user->email}}">
    </div>
</form>
