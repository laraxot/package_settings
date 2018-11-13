{{--  
{{ $key }}
@php 
echo '<pre>';print_r($v); echo '</pre>';
@endphp
--}}
@foreach($rows as $k => $v)
	@if(is_array($v))
	    <br style="clear:both" /><h3>{{ $pre }} &raquo; {{ $k }} </h3>
	    @if($pre==null)
	        @include('settings::admin.iter_field',['rows'=>$v,'pre'=>$k ])
	    @else
	    	@include('settings::admin.iter_field',['rows'=>$v,'pre'=>$pre.'['.$k.']'])
	    @endif
	@else
		@if($pre==null)
			{{ Form::bsText($k,$v) }}
		@else
			{{ Form::bsText($pre.'['.$k.']',$v) }}
		@endif
	@endif
@endforeach