<div class="card-style mb-30">
    <h6 class="mb-25">Profile</h6>
    <form wire:submit.prevent="update">
        @csrf
        <div class="input-style-1">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" wire:model='name'">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <!-- end input -->
        <div class="input-style-1">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" wire:model='email'" disabled>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <!-- end input -->

        <div class="input-style-1">
            <label for="password">Password</label>

            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" wire:model.lazy='password'>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

        </div>
        <!-- end input -->


        <div class="input-style-1">
           <label for="password_confirmation">Confirm Password</label>

            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            wire:model.lazy="password_confirmation">
        </div>

        <div class="input-style-1">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
        <!-- end input -->

    </form
</div>
