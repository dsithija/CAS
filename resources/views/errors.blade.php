@if ($errors->has($field))
	@foreach ($errors->get($field) as $message)
		<div class="form-control-feedback">{{ $message }}</div>
	@endforeach
@endif