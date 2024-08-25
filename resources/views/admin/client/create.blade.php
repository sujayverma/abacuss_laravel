@extends('layouts.dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: white;
    }
</style>


<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create New Client</h4>
            </div>
        </div>
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>    
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('store.client') }}" class="form">
                        @csrf
                        <div class="form-group row">

                            <div class="col-6">
                            <label class="form-label">Name</label>
                            <input name="name" class="form-control" type="text" placeholder="Name"  required>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label">Email</label>
                            <input name="email" class="form-control" type="text" placeholder="Email"  required>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Phone</label>
                            <input name="phone_no" class="form-control" type="text" placeholder="Phone No"  required>
                            @error('phone_no')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Address</label>
                            <input name="address" class="form-control" type="text" placeholder="address"  required>
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 lh-125"><br><br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck1" name="status" value="1" checked required>
                                <label class="form-check-label mt-2p" for="customCheck1">Status</label>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                        <hr>
                        <div class="col-4 mx-auto text-center m-b-15">
                            <button type="submit" class="btn waves-effect waves-light btn-primary" value="Submit">Add Client</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection