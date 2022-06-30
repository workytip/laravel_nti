<!DOCTYPE html>
<html lang="en">

<head>
    <title>To Do | Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Add New Task</h2>
        <a href="{{ url('index') }}" class='btn btn-info m-r-1em'>Display Tasks</a>
        <br><br>


          @include('errors')

        @include('messages')


        <form action="<?php echo url('/store'); ?>" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="" name="title"
                    placeholder="Enter Title" value="{{ old('title') }}">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <textarea  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content"
                    placeholder="Enter Content"> {{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Start_date</label>
                <input type="date" class="form-control" id="exampleInput" name="start_date">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">End_date</label>
                <input type="date" class="form-control" id="exampleInput" name="end_date">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>


</body>

</html>
