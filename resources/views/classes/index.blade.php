<!DOCTYPE html>
<html>

<head>
    <title>Fitness Classes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="top-nav">
        <h1>Fitness Classes</h1>
        <a href="{{ route('classes.create') }}">
            <button type="button"> Add New Class</button>
        </a>
    </div>

    <form method="GET" action="{{ route('classes.index') }}">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or instructor">
        <button type="submit">Search</button>
    </form>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Instructor</th>
                <th>Date/Time</th>
                <th>Duration (mins)</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
            <tr>
                <td>{{ $class->name }}</td>
                <td>{{ $class->instructor }}</td>
                <td>{{ $class->datetime }}</td>
                <td>{{ $class->duration }}</td>
                <td>{{ $class->capacity }}</td>
                <td>
                    <form action="{{ route('classes.edit', $class->id) }}" method="GET" style="display:inline;">
                        <button type="submit" class="action-button edit-btn">Edit</button>
                    </form>
                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-button delete-btn">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $classes->links() }}
    </div>

</body>

</html>