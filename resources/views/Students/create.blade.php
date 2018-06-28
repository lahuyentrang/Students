
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add</button>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="/store" id ="searchForm" method = "post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>

        <div class="container">
          <label for="masv"><b>Mã SV</b></label>
          <input type="text" placeholder="Nhập mã sv" name="masv" required>

          <label for="name"><b>Tên </b></label>
          <input type="text" placeholder="Nhập tên" name="name" required>

          <label for="class"><b>Lớp</b></label>
          <input type ="text" placeholder="Nhập tên lớp" name="class" required>

           <label for="dob"><b>Ngày sinh</b></label>
            <input type="date" placeholder="Nhập ngày sinh" name="dob" required>

            <label for="photo"><b>Ảnh </b></label>
            <input type="file"  name="photo" required>



          <button type="submit">Add new</button>

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


{{--<form action="/store" id ="searchForm" method = "post" enctype="multipart/form-data">
{{ csrf_field() }}
        <dl>

           <dt>Ma SV :</dt>
               <dd> <input type="text" name ="masv" placeholder="masv"></dd>

           <dt>Name:</dt>
                <dd><input type="text" name ="name" placeholder="name"></dd>

           <dt>Class:</dt>
                <dd><input type="text" name ="class" placeholder="class"></dd>

           <dt>Date of birth:</dt>
                <dd><input type="date" name="dob" placeholder="Date of birth"></dd>

           <dt>Photo</dt>
                <dd><input type ="file" name ="photo" ></dd>


            <dt><input type="submit" name="submit" id="clickme"  value="Add"/></dt>
        </dl>

</form>--}}


