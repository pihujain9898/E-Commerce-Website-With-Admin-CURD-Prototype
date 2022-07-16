@extends('layouts.adminMain')

@section('main-section')

    <!--Main layout-->
    <main style="margin-top: 6.4rem; padding-bottom:2rem;">
        <div class="container pt-4 table-responsive-lg">
        <table class="table">
            <thead style="text-transform: capitalize">
            <tr>
                @foreach(array_keys(get_object_vars($tables_array[$table_name][0])) as $col_names)
                    <th scope="col">{{$col_names}}</th>
                @endforeach
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tables_array[$table_name] as $usr)
            <tr>
                @foreach(array_keys(get_object_vars($tables_array[$table_name][0])) as $col_names)
                    <td>
                        {{$usr->$col_names}}
                    </td>
                @endforeach
                <td>
                    @php
                    $tid = app("App\\Models\\".ucfirst($table_name))->getKeyName();
                    @endphp
                    <form action="{{url('/delete')}}" method="POST">
                        &nbsp;&nbsp;
                        @csrf
                        <button type="submit" name="delete" value="{{$table_name}}&{{$tid}}&{{$usr->$tid}}">
                            <i class="fa-solid fa-trash" style="color: crimson"></i>
                        </button>                        
                    </form>
                    &nbsp;&nbsp;
                    <button type="button" data-toggle="modal" data-target="#m{{array_values((array)$usr)[0]}}">
                        <i class="fa-solid fa-pen" style="color: seagreen"></i>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="m{{array_values((array)$usr)[0]}}" tabindex="-1" role="dialog" aria-labelledby="m{{array_values((array)$usr)[0]}}Title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="m{{array_values((array)$usr)[0]}}Title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{url('/update')}}" method="POST">
                                    @csrf
                                    <div class="modal-body row">
                                        @foreach(array_keys(get_object_vars($tables_array[$table_name][0])) as $col_names)
                                        <label for="{{$col_names}}" class="col-sm-3" style="text-transform: capitalize">{{$col_names}}</label>
                                        <input type="text" name="{{$col_names}}" id="{{$col_names}}"  class="col-sm-8 {{$col_names}}" value="{{$usr->$col_names}}">
                                        <br>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="Submit" class="btn btn-dark" name="table" value="{{$table_name}}">Update</button>
                                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <center>
            <button class="btn btn-dark"type="button" data-toggle="modal" data-target="#addData">Add Data</button>
        </center>
            {{-- Modal --}}
            <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="addDataTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form action="{{url('/insert')}}" method="POST">
                            @csrf
                            <div class="modal-body row">
                                @foreach(array_keys(get_object_vars($tables_array[$table_name][0])) as $col_names)
                                <label for="{{$col_names}}" class="col-sm-3" style="text-transform: capitalize">{{$col_names}}</label>
                                <input type="text" name="{{$col_names}}" id="{{$col_names}}"  class="col-sm-8 {{$col_names}}" value="">
                                <br>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="Submit" class="btn btn-dark" name="table" value="{{$table_name}}">Update</button>
                                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>                                                        
                // Here all the primary keys are restricted to edit and insert as there is auto-increment
                for (let elements of document.getElementsByClassName("{{$tid}}")) {
                    elements.readOnly = true;
                }
            </script>
        </div>
    </main>
@endsection