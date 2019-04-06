
<div class="form-group col-lg-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('lastname', 'Apellido:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('country', 'País:') !!}
    {!! Form::select('country', $countries, null, ['class' => 'form-control',  'placeholder' => '']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('province', 'Provincia:') !!}
    {!! Form::select('province', $provinces, null, ['class' => 'form-control', 'placeholder' => '']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('position', 'Puesto:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('company', 'Empresa:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('area', 'Rubro:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('categories[]', 'Áreas de interés:') !!}
    @if(isset($interest_areas))
        <select name="categories[]" class="select2 form-control" placeholder="" multiple style="width: 100%">
            @foreach ($interest_areas as $key => $value)

                <option value="{{ $key }}" @if (isset($applicant) && $applicant->categories->contains($key)) selected @endif>
                    {{ $value }}
                </option>

            @endforeach
        </select>
    @else
        {!! Form::select('categories[]', $interest_areas, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
    @endif
</div>

<!-- Body Field -->
<div class="form-group col-lg-12">
    {!! Form::label('text', 'Texto:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('applicants.index') !!}" class="btn btn-default">Cancelar</a>
</div>
