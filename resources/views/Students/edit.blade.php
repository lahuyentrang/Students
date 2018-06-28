

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button>

    <div id="id01" class="modal">

    {{--  <form class="modal-content animate" action="/store" id ="searchForm" method = "post" enctype="multipart/form-data">--}}
    <form class="modal-content animate" action="/update" id ="searchForm" method = "post" enctype="multipart/form-data">

      {{ csrf_field() }}
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>

        <div class="container">
        <input type="hidden" name="id" value="{{$model->id}}">
          <label for="masv"><b>Mã SV</b></label>
          <input type="text" placeholder="Nhập mã sv" name="masv" value="{{$model->masv}}" required>

          <label for="name"><b>Tên </b></label>
          <input type="text" placeholder="Nhập tên" name="name" value="{{$model ->name}}" required>

          <label for="class"><b>Lớp</b></label>
          <input type ="text" placeholder="Nhập tên lớp" name="class" value="{{$model ->class}}" required>

           <label for="dob"><b>Ngày sinh</b></label>
            <input type="date" placeholder="Nhập ngày sinh" name="dob" value ="{{$model ->dob}}" required>

            <label for="photo"><b>Ảnh </b></label>
            <input type="file"  name="photo" value="{{$model ->photo}}" required>



          <button type="submit">Edit</button>

        </div>

      </form>
    </div>

 <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>

</body>
</html>



{{--
<form action="/update" id ="searchForm" method = "post" enctype="multipart/form-data">
{{ csrf_field() }}
    <input type="hidden" name="id" value="{{$model->id}}">
    <dl>

        <dt> Ma SV :</dt>
            <dd> <input type="text" name ="masv" value="{{$model ->masv}}"><br>

        <dt> Name:</dt>
            <dd> <input type="text" name ="name" value="{{$model->name}}"></dd>

        <dt>Class:</dt>
            <dd> <input type="text" name ="class" value="{{$model ->class}}"></dd>

        <dt>Date of birth:</dt>
            <dd> <input type="date" name="dob" value="{{$model ->dob}}"></dd>

        <dt>Photo</dt>
            <dd><input type ="file" name ="photo" value="{{$model->photo}}" ></dd>

        <dt>  <input type="submit" name="submit" id="clickme"  value="Edit"/></dt>
    </dl>

</form>

--}}
