<!DOCTYPE html>
<html>

<head>
    <title>Fitness Classes</title>
    <!-- Link to our custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Top navigation bar with title and add button -->
    <div class="top-nav">
        <h1>Fitness Classes</h1>
        <!-- Button to create a new fitness class -->
        <a href="{{ route('classes.create') }}">
            <button type="button">Add New Class</button>
        </a>
    </div>

    <!-- Search form that filters classes -->
    <form method="GET" action="{{ route('classes.index') }}">
        <input type="text" name="search" value="{{ request('search') }}"
            placeholder="Search by name or instructor">
        <button type="submit">Search</button>
    </form>

    <!-- Main table displaying all fitness classes -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Instructor</th>
                <th>Date/Time</th>
                <th>Duration</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each class and display its details -->
            @foreach($classes as $class)
            <tr>
                <td>{{ $class->name }}</td>
                <td>{{ $class->instructor }}</td>
                <td>{{ $class->datetime }}</td>
                <td>{{ $class->duration }} mins</td>
                <td>{{ $class->capacity }}</td>
                <td class="action-buttons">
                    <!-- Edit button form -->
                    <form action="{{ route('classes.edit', $class->id) }}" method="GET">
                        <button type="submit" class="edit-btn">Edit</button>
                    </form>
                    <!-- Delete button form with security tokens -->
                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination links -->
    <div class="pagination">
        {{ $classes->links() }}
    </div>

</body>

</html>