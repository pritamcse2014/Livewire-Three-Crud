{{--
<div>
    Because she competes with no one, no one can compete with her.
</div> --}}

<div>
    <div class="d-flex">
        <button wire:navigate href="customers/create" class="btn btn-primary btn-sm ms-auto mb-2">Create</button>
    </div>
    <livewire:flash-message />
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>
                    <button wire:navigate href="/customers/edit/{{ $value->id }}" class="btn btn-success btn-sm">Edit</button>
                    <button wire:navigate href="/customers/view/{{ $value->id }}" class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>