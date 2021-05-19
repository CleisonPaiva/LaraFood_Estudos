@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $erro)
            <ul>
                <li>{{$erro}}</li>
            </ul>
        @endforeach
    </div>
@endif
