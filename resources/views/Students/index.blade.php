
@extends('Layouts.layouts')
@section('content')
  <script>


  </script>
  {{-- <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
--}}

<div class = "container">



         <div id="div1" ><button  id="div3" type="button" class=" create-modal btn btn-default" data-toggle="modal" data-target="#create">Create a new student</button></div>
         @include('Students.create')


          <div >

    <br>
    <div >
    <table class="table table-bordered" id="sample-table-1">
           <thead>
           		<tr>
           				<th>STT</th>

           				<th>Mã SV</th>
           				<th >Tên </th>
           				<th>Lớp</th>
           				<th>Ngày Sinh</th>
           				<th>Ảnh</th>

           				<th></th>
           				<th></th>
           				<th></th>
           		</tr>
           </thead>
           <tbody>
           		@foreach( $model as $item)
           		<tr>

           				<td class="hidden-xs">{{$item ->id}}</td>
           				<td>{{$item ->masv}}</td>
           				<td>{{$item ->name}}</td>
           				<td>{{$item->class}}</td>
           				<td >{{$item ->dob}}</td>
                        <td><img src="upload/{{$item->photo}}" alt  ="photo" class="img-thumbnail" width="304" height="236"></td>
           				<td >

           				<button  type="button" class="edit-modal  btn btn-infor btn-sm"  data-id="{{$item ->id}}"  data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button>
           				@include('Students.edit')
           				</td>

                         <td>

           				<button   class ="delete-modal btn btn-danger btn-sm" data-id ="{{$item->id}}" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>

           														<!-- Modal delete -->

                        </td>
                        <td>
                        <button type="button" class="show-modal  btn btn-info btn-sm"><a href="{{url('/details',['id'=>$item->id])}}" class="details"><span class="glyphicon glyphicon-eye-open"></span></a></button>
                        </td>
                </tr>
                @endforeach
           </tbody>
    </table>
    <!-- end: BASIC TABLE PANEL -->
    </div>
    </div>
   <div class="modal fade" id="delete" role="dialog">
           <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <form action="/delete" method="get">
                           <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" >Delete confirmation</h4>
                           </div>
                           <div class="modal-body">
                                 <p class="text-center">Are you sure to delete this??</p>

                                    <input type="text" name="id" id="deleteId" >

                           </div>
                           <div class="modal-footer">
                                <button type="submit" class="btn btn-warning" >Delete</button>
                                <button class="btn btn-default" data-dismiss="modal">No, cancel!!</button>
                           </div>
                    </form>
                  </div>

           </div>
    </div>


</div>


@endsection


{{--
</body>
</html>--}}
