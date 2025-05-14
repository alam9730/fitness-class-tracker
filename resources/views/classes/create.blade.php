<!DOCTYPE html>
<html>

<head>
    <title>Add Class</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="top-nav">
        <h1>Add New Fitness Class</h1>
        <a href="{{ route('classes.index') }}">
            <button type="button">Return to Home Page</button>
        </a>
    </div>

    <form action="{{ route('classes.store') }}" method="POST">
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @csrf
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Description: <textarea name="description"></textarea></label><br>
        <label>Instructor: <input type="text" name="instructor" required></label><br>
        <label>Date/Time: <input type="datetime-local" name="datetime" required></label><br>
        <label>Duration (mins): <input type="number" name="duration" min="30" required></label><br>
        <label>Capacity: <input type="number" name="capacity" min="1" required></label><br>
        <button type="submit">Save Class</button>
    </form>
</body>

</html>