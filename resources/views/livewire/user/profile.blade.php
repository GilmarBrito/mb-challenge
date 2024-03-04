<div class="card-style mb-30">
    <h6 class="mb-25">Complementary information</h6>
    <form wire:submit.prevent="update">
        @csrf
        <div class="input-style-1">
            <label for="email_alternative">Alternative Email</label>
            <input type="text" class="form-control @error('email_alternative') is-invalid @enderror" id="email_alternative" name="email_alternative" wire:model='email_alternative'">
            @if ($errors->has('email_alternative'))
                <span class="text-danger">{{ $errors->first('email_alternative') }}</span>
            @endif
        </div>
        <div class="input-style-1">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" wire:model='birthday'">
            @if ($errors->has('birthday'))
                <span class="text-danger">{{ $errors->first('birthday') }}</span>
            @endif
        </div>
        <div class="input-style-1">
            <label for="tax_id">Tax Id</label>
            <input type="text" class="form-control @error('tax_id') is-invalid @enderror" id="tax_id" name="tax_id" wire:model.lazy='tax_id'>
            @if ($errors->has('tax_id'))
                <span class="text-danger">{{ $errors->first('tax_id') }}</span>
            @endif
        </div>
        <div class="input-style-1">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
</div>

