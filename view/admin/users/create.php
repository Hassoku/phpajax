
<html lang="en">

  <?php  require '../partials/head.php'; ?>

  <body>
    
<!--header-->
<?php  require '../partials/header.php'; ?>

<div class="container-fluid">
  <div class="row">
   <!--sidebar-->
<?php  require '../partials/sidebar.php'; ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

    

      <h2>Add User</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form>
               <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="namber" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
     <select class="form-control" name="city" aria-label="Default select example">
  <option selected>Select City</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="mb-3">
      <div class="form-check">
  <input  class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
  </div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupFile01">Upload</label>
  <input type="file" name="image" class="form-control" id="inputGroupFile01">
</div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
          </div>
          
        </div>
        
      </div>
    </main>
  </div>
</div>
<?php  require '../partials/footer.php'; ?>

  </body>
</html>
