<!DOCTYPE html>
<html>

<head>
    <title>Add Class</title>

    <!-- Link to the custom CSS stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="top-nav">
        <!-- Page heading -->
        <h1>Add New Fitness Class</h1>

        <!-- Button to go back to the homepage (class list) -->
        <a href="{{ route('classes.index') }}">
            <button type="button">Return to Home Page</button>
        </a>
    </div>

    <!-- Form to create a new fitness class -->
    <form action="{{ route('classes.store') }}" method="POST">
        
        <!-- Display validation errors, if any -->
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- CSRF token to protect the form -->
        @csrf

        <!-- Input fields for class information -->
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Description: <textarea name="description"></textarea></label><br>
        <label>Instructor: <input type="text" name="instructor" required></label><br>
        <label>Date/Time: <input type="datetime-local" name="datetime" required></label><br>
        <label>Duration (mins): <input type="number" name="duration" min="30" required></label><br>
        <label>Capacity: <input type="number" name="capacity" min="1" required></label><br>

        <!-- Submit button to save the new class -->
        <button type="submit">Save Class</button>
    </form>
</body>

</html>
