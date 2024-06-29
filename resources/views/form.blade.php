<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form action="{{ url('/submit') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>

    @if (session('data'))
        <script>
            const data = @json(session('data'));
            alert('Submitted data: ' + JSON.stringify(data));
        </script>
    @endif
</body>
</html>
