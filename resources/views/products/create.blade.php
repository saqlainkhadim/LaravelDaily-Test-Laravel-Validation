<li>
    @foreach ($errors->all() as $msg )
    <ul>{{ $msg }}</ul>
    @endforeach
</li>


<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
