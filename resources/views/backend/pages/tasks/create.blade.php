
@extends('backend.layouts.master')

@section('title')
Task Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Task Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.tasks.index') }}">All Tasks</a></li>
                    <li><span>Create Task</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New Tasks</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.tasks.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="title">Task Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                             <div class="form-group col-md-6 col-sm-12">
                                <label for="date">Due Date</label>
                                <input type="date" class="form-control" id="due_date" name="due_date" placeholder="Enter Due Date">
                            </div>
                           
                        </div>

                        <div class="form-row">
                           <div class="form-group col-md-6 col-sm-12">
                                <label for="email">Task Description</label>
                                <textarea class="form-control" name="description" rows="3" cols="2"></textarea>
                            </div>
                          <div class="form-group col-md-6 col-sm-12">
                                <label for="password">Status</label>
                                <select name="status" id="status" class="form-control select2" >
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                </select>
                            </div>
                        </div>

                      
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Task</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection