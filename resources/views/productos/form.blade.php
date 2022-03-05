<label for="nombre_producto" class="form-label">Nombre del producto</label>
<input value="{{old('nombre_producto')}}" class="form-control @error('nombre_producto') is-invalid @enderror" type="text" name="nombre_producto" id="nombre_producto" placeholder="Digite el nombre del producto">
@error('nombre_producto')
<div class="invalid-feedback">
    <span>{{$message}}</span>
</div>
@enderror


<label for="precio" class="form-label">Precio</label>
<input value="{{old('precio')}}" class="form-control @error('precio') is-invalid @enderror" type="number" name="precio" id="precio" placeholder="Digite el precio del producto">
@error('precio')
<div class="invalid-feedback">
    <span>{{$message}}</span>
</div>
@enderror


<label for="estado" class="form-label">Estado</label>
<select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror">
    <option value="" selected disabled>--Seleccione una opcion--</option>
    <option value="0">No publicado</option>
    <option value="1">Publicado</option>
</select>
@error('estado')
<div class="invalid-feedback">
    <span>{{$message}}</span>
</div>
@enderror


<label for="descripcion" class="form-label">Descripcion</label>
<textarea  class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" cols="30" rows="3"></textarea>
@error('descripcion')
<div class="invalid-feedback">
    <span>{{$message}}</span>
</div>
@enderror

<!-- <label for="descripcion" class="form-label">fecha publicacion</label> -->
<input value="{{date('y/m/d h:i:s')}}" class="form-control @error('fecha_publicacion') is-invalid @enderror" type="text" name="fecha_publicacion" id="fecha_publicacion" placeholder="Digite el precio del producto" style="display: none;">

@error('fecha_publicacion')
<div class="invalid-feedback">
    <span>{{$message}}</span>
</div>
@enderror