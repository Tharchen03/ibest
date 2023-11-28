<div class="card" style="width: 18rem;">
    <div class="card-header">
        View Customer
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $customer->name }}</li>
        <li class="list-group-item">{{ $customer->email }}</li>
        <li class="list-group-item">{{ $customer->phone }}</li>
    </ul>
    <a href="/customers" wire:navigate class="btn btn-primary "> back</a>
</div>
