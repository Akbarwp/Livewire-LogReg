@push('css')
    @livewireStyles
@endpush

@push('js')
    @livewireScripts
@endpush

<div>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header fw-semibold">
                    Login
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="login">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required wire:model.defer='email'>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="*****" required wire:model.defer='password'>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" wire:model.defer='remember'>
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="{{ route('register') }}">Haven't an account?</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary me-1">Login</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
