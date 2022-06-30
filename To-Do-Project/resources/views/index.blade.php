<!DOCTYPE html>
<html>

<head>
    <title>Tasks</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1> Display To-Do List </h1>
            <br>

            {{ 'Welcome , ' . auth()->user()->name }}
            <br>

            {{session()->get('delete_error')}}

            <br>
            @include('messages')

        </div>

        <a href="{{ url('create') }}" class='btn btn-info m-r-1em'>Add New Task</a>
         <a href="{{ url('logout') }}"
            class='btn btn-info m-r-1em'>Logout</a>
            <br> <br> <br>


        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID </th>
                <th>Title</th>
                <th>Content</th>
                <th>Start_date</th>
                <th>End_date</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>


            @foreach ($data as $key => $row)
                <tr>

                    <td>{{ $row->id }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ Str::limit($row->content, 30, '...') }}</td>
                    <td>{{ date('Y-m-d', $row->start_date) }}</td>
                    <td>{{ date('Y-m-d', $row->end_date) }}</td>
                    <td><img src="{{ url('uploads/' . $row->image) }}" width="80px" height="80px"></td>

                    <td>
                        <a href='' data-toggle="modal" data-target="#modal_single_del{{ $row->id }}"
                            class='btn btn-danger m-r-1em'>Remove Task</a>
                    </td>
                </tr>






                <div class="modal" id="modal_single_del{{ $row->id }}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">delete confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                Remove Blod : {{ $row->title }} !!!!
                            </div>
                            <div class="modal-footer">
                                <form action="{{ url('delete/'.$row->id ) }}" method="post">

                                    @method('delete') {{-- <input type="hidden" name="_method" value="delete"> --}}
                                    @csrf

                                    <div class="not-empty-record">
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
