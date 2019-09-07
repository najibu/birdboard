<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Projects</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>
<body>

    <form class="container" method="POST" action="/projects" style="padding-top: 40px">
        @csrf

        <h1 class="heading is-l">Create a project </h1>

        <div class="field">
            <label for="title" class="label">
                Title
            </label>

            <div class="control">
                <input type="text" name="title"
                    placeholder="Enter text here"
                    class="input">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">
                Description
            </label>

            <div class="control">
                <textarea name="description"
                    placeholder="Enter text here"
                    class="textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
</body>
</html>
