<form action="{{ route('proyecto.update', $proyecto->id) }}" method="post">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label for="title">Nombre</label>
		<input type ="text" class="form-control" id="name" name="name"
			value="{{ $proyecto->name }}" required>
	</div>
	<div class="form-group">
		<label for="body">Descripcion</label>
		<textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required>{{ $proyecto->Descripcion }}</textarea>
	</div>
	<button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>