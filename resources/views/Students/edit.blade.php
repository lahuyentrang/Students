
     <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <form class="animate" action="/update" id ="editForm" method = "post" enctype="multipart/form-data">

                  {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">EDIT INFORMATION</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="masv"><b>Mã SV</b></label>
                        <input type="text" placeholder="Nhập mã sv" name="masv" value="{{$item->masv}}" required>

                        <label for="name"><b>Tên </b></label>
                        <input type="text" placeholder="Nhập tên" name="name" value="{{$item ->name}}" required>

                        <label for="class"><b>Lớp</b></label>
                        <input type ="text" placeholder="Nhập tên lớp" name="class" value="{{$item ->class}}" required>

                        <label for="dob"><b>Ngày sinh</b></label>
                        <input type="date" placeholder="Nhập ngày sinh" name="dob" value ="{{$item ->dob}}" required>

                        <label for="photo"><b>Ảnh </b></label>
                        <input type="file"  name="photo" value="{{$item ->photo}}" required>


                </div>
                <div class="modal-footer">
                    <button type="submit">Edit</button>
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
              var modal = document.getElementById('edit');

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                  if (event.target == modal) {
                      modal.style.display = "none";
                  }
              }
              </script>
