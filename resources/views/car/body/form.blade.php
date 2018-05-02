<div class="container">
    <div class="form-group row">
        {!! Form::label('name', 'name',array('class'=>'control-label col-md-2')) !!}{!! Form::text('name', null, array('placeholder'=>
        'name','required'=>'required','class'=>'form-control col-md-6')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('description', 'description',array('class'=>'control-label col-md-2')) !!} {!! Form::text('description',
        null, array('placeholder'=> 'description','required'=>'required','class'=>'form-control col-md-6')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('seats', 'seats',array('class'=>'control-label col-md-2')) !!}
        {!! Form::number('seats', null,array('required'=>'required','class'=>'form-control col-md-1 ')) !!}
        {!! Form::label('doors', 'Doors',array('class'=>'control-label col-md-2')) !!}
        {!! Form::number('doors', null,array('required'=>'required','class'=>'form-control col-md-1')) !!}
        {!! Form::label('engine_type', 'Engine Type',array('class'=>'control-label col-md-2')) !!}
        {!! Form::number('engine_type', null,array('required'=>'required','class'=>'form-control col-md-2')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('engine_size', 'Engine Size',array('class'=>'control-label col-md-2')) !!}
        {!! Form::number('engine_size', null,array('required'=>'required','class'=>'form-control col-md-1')) !!}
        {!! Form::label('cylinders', 'Cylinder',array('class'=>'control-label col-md-2 ')) !!}
        {!! Form::number('cylinders', null,array('required'=>'required','class'=>'form-control col-md-1')) !!}
        {!! Form::label('power', 'Power',array('class'=>'control-label col-md-2')) !!}
        {!! Form::number('power', null,array('required'=>'required','class'=>'form-control col-md-2')) !!}
    </div>
    <div class=" row">
        <div class="col-md-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>