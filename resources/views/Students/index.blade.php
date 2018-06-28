<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="css/style.css">
  <title>Qlsv</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
   <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  <script>
  $(document).ready(function(){

      $("#div3").click(function(){
          $("#div1").load("/create");
        });

  });
  $(document).ready(function(){
        $(".div2").click(function(){
            var id = $(this).data('id');
            var url = "/edit/" + id;
            $("#div1").load(url);

        });


    });

  </script>

</head>
<body>


 <table class="table table-hover" id="sample-table-1">
        						<!-- start: BASIC TABLE PANEL -->


           										<h4 >Students management</h4>
           										<br>
           										{{--<div id="div1">
                                                </div>
--}}

           										<div id="div1" ><button id="div3" color="white">Create a new student</button></div>


           									<div >

           										<table class="table table-hover" id="sample-table-1">
           											<thead>
           												<tr>
           												    <th>STT</th>

           													<th>Mã SV</th>
           													<th >Tên </th>
           													<th>Lớp</th>
           													<th>Ngày Sinh</th>
           													<th>Ảnh</th>

           													<th></th>
           												</tr>
           											</thead>
           											<tbody>
           											@foreach( $model as $item)
           												<tr>

           													<td class="hidden-xs">{{$item ->id}}</td>
           													<td>{{$item ->masv}}</td>
           													<td>{{$item ->name}}</td>
           													<td>
           													{{$item->class}}s
           													</td>
           													<td >{{$item ->dob}}</td>
                                                             <td><img src="upload/{{$item->photo}}" alt  ="photo" width= 100 height = 100></td>
           													<td >
           													{{--<div >--}}
           													<button data-id="{{$item ->id}}" class="div2"  color="white">Edit</button>

           													{{--</div>--}}



           														<a href="{{url('/delete',['id'=>$item->id])}}"><button  color="white">Delete</button></a>


                                                                <td>
           												</tr>
                                                    @endforeach
           											</tbody>
           										</table>

           								<!-- end: BASIC TABLE PANEL -->
           						</div>


</table>


</body>
</html>