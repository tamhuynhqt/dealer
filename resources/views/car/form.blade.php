<div class="container-fluid">
    <div class="form-group row">
        {!! Form::label('make', 'Make',array('class'=>'control-label col-md-2')) !!}
        {!! Form::text('make', null, array('placeholder'=>'Make','required'=>'required','class'=>'form-control col-md-3')) !!}
        {!! Form::label('model', 'Model',array('class'=>'control-label col-md-1')) !!} 
        {!! Form::text('model', null, array('placeholder'=>'Model','required'=>'required','class'=>'form-control col-md-3')) !!}
        {!! Form::label('year', 'Year',array('class'=>'control-label col-md-1')) !!}
        {!! Form::text('year', null, array('required'=>'required','class'=>'form-control col-md-1')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('vin', 'VIN',array('class'=>'control-label col-md-2')) !!}
        {!! Form::text('vin', null, array('required'=>'required','class'=>'form-control col-md-4')) !!}
        {!! Form::label('tranmission', 'Tranmission',array('class'=>'control-label col-md-2')) !!} 
        {!! Form::select('tranmission', ['automatic', 'manual'], 'automatic',array('required'=>'required','class'=>'form-control col-md-3')) !!}
       
    </div>
    <div class="form-group row">
        {!! Form::label('series', 'Series',array('class'=>'control-label col-md-2')) !!}
        {!! Form::text('series', null, array('required'=>'required','class'=>'form-control col-md-4')) !!}
        {!! Form::label('color', 'Color',array('class'=>'control-label col-md-1')) !!} 
        {!! Form::text('color', null, array('placeholder'=>'Type color code','required'=>'required','class'=>'form-control col-md-4')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('fuel_type', 'Fuel Type',array('class'=>'control-label col-md-2')) !!} 
        {!! Form::select('fuel_type', [1=>'Petrol-Unleaded ULP', 2=>'Diesel'],1,array('required'=>'required','class'=>'form-control col-md-4')) !!}
        {!! Form::label('status', 'Status',array('class'=>'control-label col-md-1')) !!} 
        {!! Form::select('status', [1=>'Ready for Sale', 2=>'On service',3=>'Ready for test drive'],1,array('required'=>'required','class'=>'form-control col-md-4')) !!}
    </div>
    <div class="form-group row">
        {!! Form::label('Odometer', 'Odometer',array('class'=>'control-label col-md-2')) !!} 
        {!! Form::number('odometer', null, array('placeholder'=>'Current odometer','required'=>'required','class'=>'form-control col-md-6')) !!}
        
    </div>
    <div class="form-group row">

        {!! Form::select('body_id', $bodies, null,array('required'=>'required','class'=>'form-control col-md-4')) !!}    
    </div>
<div class="form-group row">

    {!! Form::file('featured' )!!}

</div>
        
    </div>
    <div class="row">
        <div class="col-md-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>