<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>

    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" wire:model="name">
                <div>
                    @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- <div id="emailHelp" class="form-text"></div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    wire:model="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <div>
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" wire:model="phone">
                <div>
                    @error('phone')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button wire:navigate class="btn btn-success" href='/customers'>Back</button>

        </form>
    </div>
</div>
