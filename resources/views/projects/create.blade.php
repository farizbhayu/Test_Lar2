<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Create a New Project</h1>
    
    <form method="POST" action="/projects">
         {{ csrf_field() }}


        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>

        <div>
            <textarea name="desc" placeholder="Project Description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>