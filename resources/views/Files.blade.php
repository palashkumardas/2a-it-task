@extends('Layout.app')
@section('content')



<input id="name"type="text"><br><br>

<input id="mobile"type="text">
<button onclick="insertData()">insert</button>

@endsection

@section('script')
<script>
    function insertData(){
        var name=document.getElementById('name').value;
        var mobile=document.getElementById('mobile').value;

        var url="/fileadd";
        var data={title:name,link:mobile};
        axios.post(url,data)
        .then(function(response){
            alert(response.data);
        })
        .catch(function(error){
            alert("error");
        });
    }
</script>
@endsection
