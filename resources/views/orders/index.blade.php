@foreach ($orders as $order)
    <div>
        #{{ $order->id }} ({{ $order->status->label() }})
    </div>
@endforeach
