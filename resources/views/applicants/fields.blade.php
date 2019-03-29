
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
    {!! Form::label('company', 'Empresa:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('categories[]', 'Áreas de interés:') !!}
    {!! Form::select('categories[]', $interest_areas, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
</div>



<!-- Body Field -->
<div class="form-group col-lg-12">
    {!! Form::label('body', 'Texto:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('applicants.index') !!}" class="btn btn-default">Cancelar</a>
</div>
