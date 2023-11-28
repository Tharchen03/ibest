<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Register</h5>

        <form wire:submit.prevent="storeUser">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control">
                @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mb-3">
            Already have an account!!!
            <button wire:navigate href="/login" class="btn btn-success">Login</button>
        </div>

    </div>
</div>
