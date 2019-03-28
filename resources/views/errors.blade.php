@if ($errors->any())
<div class="column is-full">
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif