<div>
    <div>Order #{{ $order->id }}</div>

    <form action="/orders/{{ $order->id }}" method="post">
        @csrf
        @method('PATCH')

        <select name="status">
            @foreach ($statuses as $status)
                <option value="{{ $status }}" @selected($order->status === $status)>{{ $status->label() }}</option>
            @endforeach
        </select>

        @error('status')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Edit</button>
    </form>
</div>
