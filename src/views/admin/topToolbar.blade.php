<ul class="nav nav-pills">
@foreach($rows as $k => $v)
	<li><a href="{{  route('settings.config.edit_config_file', $k) }}" data-toggle="ta1b">{{ $k }}</a>
@endforeach
</ul>
