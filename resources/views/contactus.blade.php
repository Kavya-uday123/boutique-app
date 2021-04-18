@extends("theme")
@section("content")
      <div class="row" style="background-color:cadetblue;">
        <p>
    <p>&nbsp&nbsp&nbspAddress: MG Road, Bangalore <br>
        &nbsp&nbsp&nbspE-Mail: info@nykaa.ge<br></p>
    <br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbspHours of Operation:<br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbspMonday-Friday |  09:00 - 24:00<br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbspWeekends |  09:00 - 01:00<br>
        </p>
     </div>
     <div class="row" style="background-color:cadetblue;">
        <h4><center>Write To Us</center></h4>
        <table class="table" align="center">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMobile No</td>
                <td><input type="number" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubject</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescription</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-dark">SUBMIT</button></td>
            </tr>
        </table>
     </div>
@endsection