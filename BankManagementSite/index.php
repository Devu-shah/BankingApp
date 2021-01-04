<!DOCTYPE html>
<html>
<head>
  <title>Login Page | ABC bank</title>
  <link rel="icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png">
  <style type="text/css">
    body
      {
        background-color: black;
        background-repeat: no-repeat;
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;
      }

    .form-control{
        min-height: 41px;
        box-shadow: none;
        border-color: #e1e1e1;
      }

    .form-control: focus{
        border-color: #00cb82;
      }

    .form-control .btn {
        border-radius: 300px;
      }

    .form-header{
        margin: -30px -30px 20px;
        padding: 30px 30px 10px;
        text-align: center;
        background: #00cb82;
        border-bottom: 1px solid #eee;
        border-top: 1px solid #eee;
        color: #fff;
        border-radius: 30px
      }

    .form-header h2{
        font-size: 34px;
        font-weight: bold;
        margin: 0 0 10px;
      }
    .signin-form {
        width: 75%;
        margin-left: 25vh;
        padding-left: 2vh;
        align-items: center;
        padding-right: 2vh;
        padding-top: 6vh;
      }

    .signin-form form{
        color: #999;
        border-radius: 30px;
        border-top-right-radius: 30px; 
        border-top-left-radius: 30px; 
        margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
        padding: 30px;
        text-align: center;
      }

    .signin-form .form-group{
        margin-bottom: 20px;
        margin-top: 10px;
        text-align: center;
      }

    .signin-form label{
        font-weight: normal;
        /*text-align: center;*/
        font-size: 19px;
      }

    .signin-form .btn{
        font-size: 19px;
        font-weight: bold;
        background: #00cb82;
        border: none;
        min-width: 200px;
      }

    .signin-form .btn:hover, .signin-form .btn:focus{
        background: #00cb82 !important;
        outline: none;
        color: darkblue;
      }

    .signin-form a{
        color: black;
        text-align: center;
      }

    .signin-form a:hover{
        text-decoration: underline;
        color:red;
      }


    .signin-form input[type = text], input[type = password]{
          text-align: center;
          width: 75%;
          height: 4.75vh;
      }

    .signin-form input:hover{
        border-color: black;
    }

    .powered-by{
      text-align: center;
      margin-bottom: 0vh;
      margin-left: 5vh;
      max-width: 200vh;
      background-color: white;
      border-top-right-radius: 10vh;
      border-top-left-radius: 10vh;
      background-color: orange;
    }

    .powered-by img{
      max-width: 3vh;
      max-height: 5vh;
      margin-top: 0.5vh;
      /*margin-right: 2vh;*/
      margin-bottom: 0.5vh;
      
    }

    .powered-by h3{
      margin-top: 0vh;
      margin-right: 2vh;
      margin-bottom: 3vh;
      margin-left: 1vh;
      size: 2vh;
      text-decoration-color: red;
      align-content: center;
      align-items: center;
      align-self: center;
    }
  </style>
</head>
<body>
  <div class="signin-form col-6 col-md-9">
    <form action="signin.php" method='post'>
      <div class="form-header">
        <h2><font face="Brush Script Mt" size="7">Log In to Your bank Account!</font></h2>
      </div>
      <div class="form-group">
        <label><font face="algerian" size="5"> Username </font><font color="red">*</font></label><br>
        <input type="text" class='form-contorl' name='username' id="username" placeholder="Username" autocomplete='off' required>
      </div>
      <div class="form-group">
        <label><font face="algerian" size="5"> Password </font><font color="red">*</font></label><br>
        <input type="password" class='form-contorl' name='password' placeholder="Password" autocomplete='off' required>
      </div>
      <div class="form-group">
        <label><font face="algerian" size="5"> Customer Contact Number </font><font color="red">*</font></label><br>
        <input type="text" class='form-contorl' name='contactno' placeholder="Your contact Number" autocomplete='off' required>
      </div>
      <div class="form-group">
        <label><font face="algerian" size="5"> Login PIN </font><font color="red">*</font></label><br>
        <input type="password" class='form-contorl' name='pin' placeholder="PIN number" autocomplete='off'><br>
      </div>
      <div class="form-group">
        <label><font face="algerian" size="2"> Don't have an Account? <a href="register.php">Register now !</a></font></label>
        <br>
      </div>
      <div class="form-group">
        <center>
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="add" accesskey="enter">
            Log In !
          </button>
        </center>
        </div>
    </form>
  </div>
  <div class="powered-by col-6 col-md-4">
    <div class="row">
        <center>
          <h3><img src="img/lighting.png">  Powered By: Devansh Software Makers</h3>
          <small>&copy; 2020 - 2021</small>  
        </center> 
      </div>
    </div>
  </div>
   <!-- BOOTSTRAP CORE JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>