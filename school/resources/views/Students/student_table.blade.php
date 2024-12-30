<h2>Student List</h2>

@if(count($students) > 0)
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>School</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->school }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No students found.</p>
@endif
