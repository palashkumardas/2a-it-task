@extends('Layout.app')
@section('content')

<div id="mainDiv" class="container d-none">
    <div class="row">
    <div class="col-md-12 data-table-card col-lg-12 col-sm-12">
        <button id="addBtn" class="btn my-3 btn-sm btn-danger">Apply form</button>
        <div class="card">
    <table id="certifiDataTable" class="table table-bordered">
      <thead>
        <tr>
          <th class="th-sm">Id</th>
          <th class="th-sm">Name</th>
          <th class="th-sm">Mobile</th>
          <th class="th-sm">Course</th>
          <th class="th-sm">Ref.No</th>
          <th class="th-sm">Status</th>
        </tr>
      </thead>
      <tbody id="certificateData">


      </tbody>
    </table>
</div>
    </div>
    </div>
    </div>

    {{-- loading  --}}
    <div id="loaderDiv" class="container">
        <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loader" src="{{asset('images/loader.svg')}}">
        </div>
        </div>
    </div>
    {{-- data not found --}}
    <div id="wrongDiv" class="container d-none">
        <div class="row">
        <div class="col-md-12 text-center p-5">
            <img src="{{asset('images/wrong.jpg')}}">
        </div>
        </div>
    </div>
    {{-- modal for apply for --}}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title" id="exampleModalLabel">Add New Supplier</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <div class="modal-body">
          <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <label>Name</label>
                    <input id="nameAddID" type="text"  class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <label>Email</label>
                    <input id="emailAddID" type="text"  class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <label>Mobile</label>
                    <input id="mobileAddID" type="text"  class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <label>Enroll Course </label>
                    <select id="courseAddID" class="form-control">
                        <option value="laravel">Laravel</option>
                        <option value="react">React</option>
                        <option value="django">Django</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <label> Course Duration </label>
                    <select id="durationAddID" class="form-control">
                        <option value="six">Six month</option>
                        <option value="three">Three month</option>
                    </select>
                </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button  id="serviceAddConfirmBtn" type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script>

getdata();


       // get data
       function getdata(){
        axios.get('/getCertificateData').then(function(response){
            var jsonData=response.data;

            if(response.status==200){
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
                $('#certificateData').empty();


                $.each(jsonData,function(i,item){
                $('<tr>').html(
                    "<td>"+jsonData[i].id+"</td>"+
                    "<td>"+jsonData[i].name+"</td>"+
                    "<td>"+jsonData[i].mobile+"</td>"+
                    "<td>"+jsonData[i].enroll_course+"</td>"+
                    "<td>"+jsonData[i].serial_cert+"</td>"+
                    "<td>"+jsonData[i].status+"</td>"
                ).appendTo('#certificateData');

                });

                // data table
                $('#certifiDataTable').DataTable();
                $('.dataTables_length').addClass('bs_select');

            }else{
                $('#loaderDiv').addClass('d-none');
                $('#wrongDiv').removeClass('d-none');

            }

        }).catch(function(error){
            $('#loaderDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
        });
    }
// end select data

// start add apply form
$('#addBtn').click(function(){
$('#addModal').modal('show');
})

// get form data
$('#serviceAddConfirmBtn').click(function(){
    var name= $('#nameAddID').val();
    var useremail=$('#emailAddID').val();
    var usermobile=$('#mobileAddID').val();
    var enroll=$('#courseAddID').val();
    var coursetime=$('#durationAddID').val();

    CertificateAdd(name,useremail,usermobile,enroll,coursetime);

})

function CertificateAdd(name,useremail,usermobile,enroll,coursetime){
if(name.length==0){
    toastr.error(' Name is Empty !');
}
else if(useremail.length==0){
    toastr.error(' Email is Empty !');
}
else if(usermobile.length==0){
    toastr.error(' Mobile No is Empty !');
}
else if(enroll.length==0){
    toastr.error(' Enroll Course is Empty !');
}
else if(coursetime.length==0){
    toastr.error(' Course duration is Empty !');
}
else{
    $('#serviceAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>");
    var url="/AddCertificate";
    var data={title:name,email:useremail,mobile:usermobile,course:enroll,duration:coursetime};
        axios.post(url,data).then(function(response){
            $('#serviceAddConfirmBtn').html("save");
            if(response.status==200){
                $('#addModal').modal('hide');
                SuccessToast('Add Success');
                getdata();
            }
            else{
                $('#addModal').modal('hide');
                ErrorToast('Add fail');
                getdata();
            }
        }).catch(function(error){
            $('#addModal').modal('hide');
            ErrorToast('someting wrong');
        });
}

}
</script>

@endsection


