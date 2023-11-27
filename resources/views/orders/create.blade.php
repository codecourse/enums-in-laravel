<form action="/orders" method="post">
    @csrf

    <select name="status">
        @foreach ($statuses as $status)
            <option value="{{ $status }}">{{ $status->label() }}</option>
        @endforeach
    </select>

    @error('status')
        <div>{{ $message }}</div>
    @enderror

    <button type="submit">Create</button>
</form>
