<!DOCTYPE html>
<html>

<head>
    <title>Edit Class</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>Edit Fitness Class</h1>
    <form action="{{ route('classes.update', $class->id) }}" method="POST">
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
        @method('PUT')
        <label>Name: <input type="text" name="name" value="{{ $class->name }}" required></label><br>
        <label>Description: <textarea name="description">{{ $class->description }}</textarea></label><br>
        <label>Instructor: <input type="text" name="instructor" value="{{ $class->instructor }}" required></label><br>
        <label>Date/Time:
            <input type="datetime-local" name="datetime"
                value="{{ \Carbon\Carbon::parse($class->datetime)->format('Y-m-d\TH:i') }}" required>
        </label><br>
        <label>Duration (mins): <input type="number" name="duration"
                value="{{ $class->duration }}" min="30" required></label><br>
        <label>Capacity: <input type="number" name="capacity"
                value="{{ $class->capacity }}" min="1" required></label><br>
        <button type="submit">Update Class</button>
    </form>
</body>

</html>