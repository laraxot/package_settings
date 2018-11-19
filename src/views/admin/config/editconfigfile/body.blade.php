{!! Form::bsOpen($rows,'edit_config_file','update') !!}
@include('settings::admin.iter_field',['rows'=>$rows,'pre'=>null])
{{ Form::bsSubmit('modifica') }}
{{ Form::close() }}