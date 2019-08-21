<html>
    <body>
        <h1>
            User List
        </h1>
        <ul>
            @foreach($users as $user)
                <li>id: {{$user->id}}</li>
                <li>name: {{$user->name}}</li>
                <li>email: {{$user->email}}</li>
            @endforeach
        </ul>
    </body>
</html>
