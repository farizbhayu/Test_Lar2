<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Project</h1>

    @foreach ($projects as $project)
        <ul> {{ $project->title }}
            <li>{{ $project->desc }}</li>
        </ul>
    @endforeach
</body>
</html>