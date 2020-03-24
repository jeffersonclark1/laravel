<div class="form-group row">
    <label for="name">Name</label>
    <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('name') ?? $customer->name }}" name="name" >
    <div>
        {{ $errors->first('name')  }}
    </div>
</div>
<div class="form-group row">
    <label for="email">Email</label>
    <input id="email" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('email') ?? $customer->email }}" name="email" >
    <div>
        {{ $errors->first('email')  }}
    </div>
</div>
<div class="form-group row">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customers status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        <option value="" disabled>Select company</option>
        @foreach($companies as $companie)
            <option value="{{ $companie->id }}" {{ $companie->id == $customer->company_id ? 'selected ' : '' }}>{{ $companie->name }}</option>
        @endforeach
    </select>
</div>
@csrf
