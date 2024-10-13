@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Isi Data Wisata</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email2">Email Address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email2"
                    placeholder="Enter Email"
                  />
                  <small id="emailHelp2" class="form-text text-muted"
                    >We'll never share your email with anyone
                    else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1"
                    >Example select</label
                  >
                  <select
                    class="form-select"
                    id="exampleFormControlSelect1"
                  >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1"
                    >Example file input</label
                  >
                  <input
                    type="file"
                    class="form-control-file"
                    id="exampleFormControlFile1"
                  />
                </div>
                <div class="form-group">
                  <label for="comment">Comment</label>
                  <textarea class="form-control" id="comment" rows="5">
                  </textarea>
                </div>
                  <button class="btn btn-success">Submit</button>
                  <button class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>

@endsection