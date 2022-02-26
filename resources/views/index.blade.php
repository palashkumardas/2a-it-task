@extends('Layout.app2')
@section('content')


<div class="container">
    <div class="row">

        <form>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" class="form-control" id="regNameId" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" class="form-control" id="regEmailId" required>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label>Mobile</label>
                  <input type="text" class="form-control" id="regMobileId" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label>Password</label>
                  <input type="password" class="form-control" id="regPassId" required>
                </div>
              </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label>Address</label>
                <textarea class="form-control" id="regAddressID" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="regStatusId" required>
                <label>
                  Status
                </label>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>
</div>




@endsection

@section('script')

@endsection
