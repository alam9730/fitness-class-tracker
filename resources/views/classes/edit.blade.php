<!DOCTYPE html>
<html>

<head>
    <title>Edit Class</title>
    <!-- Links to external CSS file for styling -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Main heading for the edit page -->
    <h1>Edit Fitness Class</h1>

    <!-- Form to submit updates to the class -->
    <form action="{{ route('classes.update', $class->id) }}" method="POST">
        <!-- Display validation errors if any exist -->
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- CSRF protection and method spoofing for PUT request -->
        @csrf
        @method('PUT')

        <!-- Form fields with current values pre-filled -->
        <label>Name: <input type="text" name="name" value="{{ $class->name }}" required></label><br>
        <label>Description: <textarea name="description">{{ $class->description }}</textarea></label><br>
        <label>Instructor: <input type="text" name="instructor" value="{{ $class->instructor }}" required></label><br>

        <!-- Date/time input formatted for HTML5 datetime-local -->
        <label>Date/Time:
            <input type="datetime-local" name="datetime"
                value="{{ \Carbon\Carbon::parse($class->datetime)->format('Y-m-d\TH:i') }}" required>
        </label><br>

        <!-- Number inputs with minimum values -->
        <label>Duration (mins): <input type="number" name="duration"
                value="{{ $class->duration }}" min="30" required></label><br>
        <label>Capacity: <input type="number" name="capacity"
                value="{{ $class->capacity }}" min="1" required></label><br>

        <!-- Submit button -->
        <button type="submit">Update Class</button>
    </form>
</body>

</html>