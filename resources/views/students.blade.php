<div>
    <h1>Students List</h1>
    {{-- {{
    print_r($data)
    }} --}}
     <table border="1">
        <tr>
            <td><b>id</b></td>
            <td><b>name</b></td>
            <td><b>email</b></td>
            <td><b>batch</b></td>
        </tr>
        @foreach ($data as $student )
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batch }}</td>
        </tr>
            @endforeach
     </table>
    <!-- Be present above all else. - Naval Ravikant -->
</div>
