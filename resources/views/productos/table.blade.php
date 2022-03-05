
<div class="table-responsive">
    <table id="example" class="table striped table-responsive-sm">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Publicacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (count($products)>0)
            @foreach ($products as $product )
            <tr>
                <td><strong>{{$product->id_producto}}</strong></td>
                <td class="text-center"><i class="fa fa-image"></i></td>
                <td>{{$product->nombre_producto}}</td>
                <td>${{ number_format($product->precio) }}</td>
                @if ($product->estado == '1')
                <td>Publicado</td>
                @else
                <td>No publicado</td>
                @endif
                <td>{{$product->fecha_publicacion}}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>