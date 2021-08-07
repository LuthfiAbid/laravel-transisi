@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Create Employees',
'activePage' => 'employee',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{-- <h5 class="title">{{__(" Create Companies")}}</h5> --}}
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('employee.store') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <!-- @method('post') -->
            @include('alerts.success')
            <div class="row">
            </div>
            <div class="row">
              <div class="col-md-12 pr-1">
                <div class="form-group">
                  <label>{{__(" Name")}}</label>
                  <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name')}}">
                  @include('alerts.feedback', ['field' => 'name'])
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">{{__(" Company")}}</label>
                  <select name="company_id" class="form-control">
                    <option value="" selected disabled>Select Company . . .</option>
                    @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                  @include('alerts.feedback', ['field' => 'company'])
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">{{__(" Email")}}</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                  @include('alerts.feedback', ['field' => 'email'])
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round">{{__('Save')}}</button>
            </div>
            <hr class="half-rule" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection