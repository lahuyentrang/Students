

   {{-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add</button>--}}
    <div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
         <form class="animate" action="/store" id ="createForm" method = "post" enctype="multipart/form-data">
                     {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-tittle">CREATE A NEW STUDENT</h4>
            </div>
            <div class="modal-body">

                <label for="masv"><b>Mã SV</b></label>
                    <input type="text" placeholder="Nhập mã sv" name="masv" required>

                       {{--teen --}}
                <label for="name"><b>Tên </b></label>
                    <input type="text" placeholder="Nhập tên" name="name" required>

                <label for="class"><b>Lớp</b></label>
                    <input type ="text" placeholder="Nhập tên lớp" name="class" required>

                       {{--  dob--}}
                <label for="dob"><b>Ngày sinh</b></label>
                    <input type="date" placeholder="Nhập ngày sinh" name="dob" required>


                        {{--   image--}}

                <label for="photo"><b>Ảnh </b></label>
                    <input type="file"  name="photo" required>

            </div>
            <div class="modal-footer">
                 <button type="submit">Add new</button>
                 <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span>Close
                 </button>
            </div>
         </form>
        </div>
    </div>
    </div>

 <script>
      // Get the modal
      var modal = document.getElementById('create');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>



