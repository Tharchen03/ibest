{{-- view / read -CRUD --}}



<div class="row justify-content-center">

    <div class="card-header">
        Read -> crud
    </div>
    <br>
    <form wire:submit.prevent="submitSearch" class="d-flex" role="search">
        <input wire:model.debounce.500ms="search" class="form-control me-2" type="search" placeholder="Search Customers"
            aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <br>
    <button wire:navigate class="btn btn-success" href='/customers/create'> Create Customer</button>
    <br>
    <livewire:flash-message />

    <table class="table table-bordered border-primary ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate href="/customers/{{ $customer->id }}"
                            class="btn btn-primary">view</button>
                        <button class="btn btn-secondary " wire:navigate
                            href="/customers/{{ $customer->id }}/edit">edit</button>
                        <button class="btn btn-danger " wire:click="deleteCustomer({{ $customer->id }})">delete</button>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $customers->links() }}

</div>
