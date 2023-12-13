<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>

<!--begin::Permissions-->
<div class="form-group col-sm-6">
    <!--begin::Label-->
    <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
    <!--end::Label-->
    <!--begin::Table wrapper-->
    <div class="table-responsive">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5">
            <!--begin::Table body-->
            <tbody class="text-gray-600 fw-semibold">
                @foreach ($permissions as $permission)
                    <!--begin::Table row-->
                    <tr>
                        <td class="text-gray-800">{{ $permission->name }}
                        </td>
                        <td>
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                <input name="permissions[]" class="form-check-input" type="checkbox"
                                    value="{{ $permission->name }}" {{ $permission->assigned ? 'checked' : '' }} />
                                <span class="form-check-label">Select</span>
                            </label>
                            <!--end::Checkbox-->
                        </td>
                    </tr>
                    <!--end::Table row-->
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Table wrapper-->
</div>
<!--end::Permissions-->
