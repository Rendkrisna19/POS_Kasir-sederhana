<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form wire:submit.prevent="authenticate">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" id="email" class="form-control" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" wire:model="password" id="password" class="form-control" required>
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>