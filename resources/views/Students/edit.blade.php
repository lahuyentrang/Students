<form action="/update" id ="searchForm" method = "post" enctype="multipart/form-data">
{{ csrf_field() }}

<input type="hidden" name="id" value="{{$model->id}}">
Ma SV :   <div class="col-sm-9"><input type="text" name ="masv" value="{{$model ->masv}}"><br>
</div>


Name:
 <div class="col-sm-9">
<input type="text" name ="name" value="{{$model->name}}"><br>

</div>

Class:  <div class="col-sm-9"> <input type="text" name ="class" value="{{$model ->class}}"><br>
</div>


Date of birth:   <div class="col-sm-9"><input type="date" name="dob" value="{{$model ->dob}}"><br>
</div>

Photo <div class ="col-sm-9">
<input type ="file" name ="photo" value="{{$model->photo}}" >
</div>


<div class="col-sm-9">

<input type="submit" name="submit" id="clickme"  value="Edit"/>

</div>
</form>

