<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">

<h2>Student List</h2>

@if(count($students) > 0)
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>School</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->school }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}/edit" title="Edit">
                            <button>Edit</button>
                        </a>
                        <form action="/students/{{ $student->id }}/delete" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete" style="color: red;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No students found.</p>
@endif
