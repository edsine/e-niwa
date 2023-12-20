<div class="form-row">
    <div class="col-lg-4">
        <label>Enter Your Name:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="la la-user"></i>
                </span>
            </div>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="John Andrews">
        </div>
        <span class="form-text text-muted">Please enter your Name</span>
    </div>
    <div class="col-md-4 mb-4">
        <div class="form-group">
            <label>Enter Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control"
                    placeholder="Email">
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="form-group">
            <label for="exampleSelectl">Select Role</label>
            <select multiple class="form-control form-control-lg" id="exampleSelectl" name="roles[]">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}"
                        {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $role->name }}</option>
                @endforeach

            </select>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <label for="validationCustom02">Input Password:</label>
        <input type="password" class="form-control" name="password" id="validationCustom02"
            placeholder="input password">
        <div class="valid-feedback">
            Success!
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <label for="validationCustom02">Confirm Password:</label>
        <input type="password" class="form-control" name="password_confirmation" id="validationCustom02"
            placeholder="input password">
        <div class="valid-feedback">
            Success!
        </div>
    </div>
</div>
