<form action="/store" id ="searchForm" method = "post" enctype="multipart/form-data">
{{ csrf_field() }}


        Ma SV :   <div class="col-sm-9">
                <input type="text" name ="masv" placeholder="masv"><br>
                        </div>
        Name:
                <div class="col-sm-9">
                <input type="text" name ="name" placeholder="name"><br>

                </div>

        Class:
                <div class="col-sm-9">
                 <input type="text" name ="class" placeholder="class"><br>
                </div>


        Date of birth:
        <div class="col-sm-9">
        <input type="date" name="dob" placeholder="Date of birth"><br>
        </div>

        Photo
         <div class ="col-sm-9">
            <input type ="file" name ="photo" >
         </div>


           <div class="col-sm-9">

           <input type="submit" name="submit" id="clickme"  value="Add"/>

           </div>
</form>

