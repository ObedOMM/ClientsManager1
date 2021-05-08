@csrf
<div class="form-group">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Rentrez un name..." value="{{ old('name') ?? $client->name }}">
    @error('name')
    <div class="invalid-feedback">
    {{ $errors->first('name') }}
    </div>
    @enderror
</div>
<div class="form-group">
<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Rentrez un email..." value="{{ old('email') ?? $client->email }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $errors->first('email') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <select name="status" id="" class="custom-select @error('status') is-invalid @enderror">
        @foreach($client->getStatusOptions() as $key => $value)
            <option value="{{ $key }}" {{ $client->status == $value ? 'Selected' : '' }}> {{ $value }} </option>
        @endforeach

    </select>
    @error('status')
    <div class="invalid-feedback">
        {{ $errors->first('status') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <select name="entreprise_id" id="" class="custom-select @error('entreprise_id') is-invalid @enderror">
        @foreach($entreprises as $entreprise)
        <option value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'Selected' : '' }} >{{ $entreprise->name }}</option>
        @endforeach
    </select>
    @error('entreprise_id')
    <div class="invalid-feedback">
        {{ $errors->first('entreprise_id') }}
    </div>
    @enderror
</div>

<div class="form-group">
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="validatedCustomFile">
        <label class="custom-file-label" for="validatedCustomFile">Choisir une image...</label>
        @error('image')
        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
        @enderror
    </div>
</div>
