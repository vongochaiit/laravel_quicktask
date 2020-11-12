@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ route('task.store') }}" method="POST" class="form-horizontal container" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">@lang('messages.Task')</label>
             

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
            

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        {{ trans('messages.AddTask') }}
                    </button>
                </div>
            </div>
        </form>
        <table class="table table-bordered container">
            <tr>
                <th> @lang('messages.Id')</th>
                <th>@lang('messages.name')</th>
                <th width="20px">@lang('messages.Action')</th>
            </tr>
            @foreach ($tasks as  $key => $task)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $task->name }}</td>
                <td>
                    <form action="{{ route('task.destroy',$task->id) }}" method="POST">    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">@lang('messages.Delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>

@endsection
