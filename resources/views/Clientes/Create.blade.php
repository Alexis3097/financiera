@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">{{ __('New Client')}}</h3>
                    </div>
                     <div>
                        <a href="{{ route('Cliente.index') }}" class="btn btn-danger">
                            {{ __('Cancel')}}
                        </a>
                </div>
            </div>
            </div>
                <div class="card-body">
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                     @endif -->
                    <form action="{{ route('Cliente.store')}}" method="POST">
                            @csrf
                            <div class="form-group form-row">
                               <div class="col-md-6">
                                    <label for="name">{{ __('Name')}}</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" >
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                               </div>
                               <div class="col-md-6">
                                    <label for="Phone">{{ __('Phone')}}</label>
                                    <input type="text" Name="Phone" id="Phone" class="form-control @error('Phone') is-invalid @enderror">
                                    @error('Phone')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                               </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-12">
                                    <label for="Address">{{ __('Address')}}</label>
                                    <input type="text" Name="Address" id="Address" class="form-control @error('Address') is-invalid @enderror">
                                    @error('Address')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type ="submit" class="btn btn-success btn-lg">{{ __('Create')}}</button>
                            </div>
                        </form>
                </div>
            </div>
    </div>
</div>

@endsection