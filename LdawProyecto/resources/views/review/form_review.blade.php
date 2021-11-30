<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre de Usuario</th>
            <th scope="col">Comentario</th>
            <th scope="col">Calificación</th>
        </tr>
    </thead>
    <tbody>
        @foreach($libro as $review)
        <tr>
            <td>{{$review->name}}</td>
            <td>{{$review->Comentario}}</td>
            <td>{{$review->Calificacion}}</td>
            <td>
                <form action="{{ url('/review/'.$review->id_review) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<br><br>
<a href="{{ url('/usuario/')}}">Regresar</a>