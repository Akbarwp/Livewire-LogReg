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
                    Register
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="register">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required wire:model.defer='name'>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="*****" required wire:model.defer='password'>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="password" placeholder="*****" required wire:model.defer='password_confirmation'>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('login') }}">Already have an account?</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary me-1">Register</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
