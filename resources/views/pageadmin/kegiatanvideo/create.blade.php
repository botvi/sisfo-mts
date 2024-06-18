<!-- resources/views/upload_video.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Upload Video</title>
</head>
<body>
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br><br>
        
        <label for="video">Upload Video:</label>
        <input type="file" name="video" id="video" required><br><br>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
