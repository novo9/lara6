@extends('layout.layout')
@section('content')
    <div class="col-lg-8">
        <form class="form-inline" method="post" action="/tasks">
            {{ csrf_field() }}
            <label class="sr-only" for="inlineFormInput">User ID</label>
            <input name="user_id" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="User ID">

            <label class="sr-only" for="inlineFormInputGroup">Task name</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <input name="name""type="text" class="form-control" id="inlineFormInputGroup" placeholder="Task name">
            </div>

            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                <label class="form-check-label">
                    <input value="1"  class="form-check-input" type="checkbox" name="completed"> Completed
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            @include('partials.errors')



        </form>


    </div>
    @endsection