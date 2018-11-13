<ul class="nav nav-tabs">
	{{--
	<li role="presentation">
		<a href="" title="back">&laquo;</a>
	</li>
	--}}
	@foreach($navs as $k=>$v)
	<li role="presentation" class="{{ $k==$nav_active?'active':'' }}">
		<a href="{{  route('settings.config.edit_config_file', $k) }}">{{ $k }}</a>
	</li>
	@endforeach
</ul>