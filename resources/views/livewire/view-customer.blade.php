{{--
<div>
    To attain knowledge, add things every day; To attain wisdom, subtract things every day.
</div> --}}

<div class="card offset-3 col-6">
    <h5 class="card-header">Customer View</h5>
    <div class="card-body">
        <h5 class="card-title">ID : {{ $customers->id }}</h5>
        <h5 class="card-title">Name : {{ $customers->name }}</h5>
        <h5 class="card-title">Email : {{ $customers->email }}</h5>
        <h5 class="card-title">Phone : {{ $customers->phone }}</h5>
        <button wire:navigate href="/customers" class="btn btn-secondary ms-auto">Back</button>
    </div>
</div>