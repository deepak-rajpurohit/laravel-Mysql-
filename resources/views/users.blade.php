<div>
    <h1>Users List</h1>
    {{-- {{ print_r($users) }} --}}

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>COURSE</td>
            <td>CITY</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->course }}</td>
            <td>{{ $user->city }}</td>
        </tr>

        @endforeach
    </table>
    {{-- <pre>
    {{
    print_r($users);
    }}
    </pre> --}}
{{--
    <table border="1">
        <tr>
            <td> <b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>course</b></td>
            <td><b>City</b></td>

        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->course}}</td>
            <td>{{$user->city}}</td>
        </tr>

        @endforeach
    </table> --}}

    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
