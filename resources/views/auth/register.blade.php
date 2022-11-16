<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no')}}">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
  <style>
    .error { 
        color: #ff0000;
        font-weight: normal;
    }
    .form-validate input{
        margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{asset('admin/images/logo-dark.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <form method="POST" class="pt-3" action="{{ route('profile') }} " id="form">
                @csrf
                
                <div class="form-group">
                  <label>Username <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="name" id="name" placeholder="Username">
                  </div>
                  <label id="name-error" class="error" for="name"></label>
                </div>

                <div class="form-group">
                  <label>Email <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" name="email" id="email" placeholder="Email">
                  </div>
                    @error('email')
                    <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                  <label id="email-error" class="error" for="email"></label>
                </div>

                <div class="form-group">
                  <label>Password <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" name="password" id="password" placeholder="Password">                        
                  </div>
                  <label id="password-error" class="error" for="password"></label>
                </div>

                <div class="form-group">
                  <label>Confirm Password <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" name="confirm_password" id="confirmPassword" placeholder="Cofirm Password">  
                 </div>
                 <label id="confirmPassword-error" class="error" for="confirmPassword"></label> 

                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{url('/')}}" class="text-primary">Login</a>
                </div>

              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- endinject -->
  <!-- endinject -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
  $(function() {
  // Setup form validation on the #register-form element
 $("#form").validate({   //#register-form is form id
     // Specify the validation rules
rules: {
        name: "required", //firstname is corresponding input name   
      password: {
        required: true,
        minlength: 6,
        
      },
      
      confirm_password: {            
             required: true,
             minlength: 6,
             equalTo: "#password",
         },
  //passowrd:  is corresponding input name
         email: {               //email is corresponding input name
             required: true,
             email: true
         },
     },
     // Specify the validation error messages
messages: {
         name: "This field is required",
         password: "Enter Valid Password",
         email: "Enter Valid Email Address",
         confirm_password: "Password not match",
     },
     submitHandler: function(form) {
         form.submit();
     }
 });

  });
})
 
 
</script>


  
</body>

</html>
