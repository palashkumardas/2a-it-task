@extends('Layout.app')
@section('content')


<div id="mainDiv" class="container d-none p-4">
    <div class="row">
    <div class="col-md-12 data-table-card col-lg-12 col-sm-12">
        <div class="card">
    <table id="fileDataTable" class="table table-bordered">
      <thead>
        <tr>
          <th class="th-sm">Id</th>
          <th class="th-sm">File Name</th>
          <th class="th-sm">Download</th>

        </tr>
      </thead>
      <tbody id="fileData">


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




@endsection

@section('script')

<script>
    getfile();

   function getfile(){
    axios.get('/getfile').then(function(response){
            var jsonData=response.data;

            if(response.status==200){
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
                $('#fileData').empty();


                $.each(jsonData,function(i,item){
                $('<tr>').html(
                    "<td>"+jsonData[i].id+"</td>"+
                    "<td>"+jsonData[i].title+"</td>"+
                    "<td>"+jsonData[i].link+"</td>"

                ).appendTo('#fileData');

                });
                 // data table
                 $('#fileDataTable').DataTable();
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
</script>
@endsection
