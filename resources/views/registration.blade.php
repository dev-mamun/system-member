@include('includes.header')
     <div style="background-image:url('image - modal background - long.png'); background-repeat: no-repeat; background-size: 1000px 1000px; background-position:-8px -90px;">
     
     <div class="container" style="margin-top:100px;">
     <h1>SignUp</h1>
        <form method="POST" action="" id="form-control">
        @csrf
        <div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon-star.png') }}"/></span>
  </div>
  <input type="text" name="upline_username" required style="width:500px;" id="upline_name" value="{{$name}}"placeholder="DISPLAYHERETHEUPLINEUSERNAME" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon-profile gray.png') }}"/></span>
  </div>
  <input type="text" style="width:500px;" maxlength="30" required name="name" id="name" placeholder="FULLNAME" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon - mobile.png') }}"/></span>
  </div>
  <input type="text" style="width:500px;" maxlength="12" required name="mobile_number" id="mobile_number" placeholder="MOBILENUMBER" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon - email.png') }}"/></span>
  </div>
  <input type="email" name="email" maxlength="30" required id="email" style="width:500px;" placeholder="EMAIL ADDRESS" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon - profile blue.png') }}"/></span>
  </div>
  <div id="error" style="margin-top: -70px;">
    <img style="position:absolute;" src="{{ url('others - chat error.png')}}"/>
    <p style=" font-size: 10px;
    margin-top: 30px;
    position: absolute;
    color: red;">Username already taken</p>
</div>
  <input type="text" name="username" id="username" maxlength="30" required style="width:500px;" placeholder="USERNAME" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon - lock.png') }}"/></span>
  </div>
  <input type="password" name="password" maxlength="30" required style="width:500px;" placeholder="PASSWORD" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><img src="{{ url('icon - lock.png') }}"/></span>
  </div>
  <input type="password" name="repeat_password" required id="repeat_password" style="width:500px;" placeholder="REPEAT PASSWORD" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-1">
    <input type="button" class="btn btn-success" value="CREATE ACCOUNT"/>
</div>
</form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('document').ready(function(e){
        $("#error").hide();
        $("input[type='button']").click(function(e){
            alert($("form").serialize());
            $.ajax({
                type:"POST",
                url: "/register",
                data: $("form").serialize(),
                success: function (data) {
            if(data == "message") {
                $("#error").show();
            } else {
                window.location.replace(data);         
            }
    },
            });
        });
    });
</script>
    </body>
</html>