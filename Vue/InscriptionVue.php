<h3 class="bannerVol">Inscription</h3>
<form method="POST" action="index.php?uc=authentification&action=verif_inscription">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="pwd" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input name="verif_pwd" type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="mb-3">
    <label for="exampleInputNme1" class="form-label">Name</label>
    <input name="name"  class="form-control" id="exampleInputName1">
  </div>
  <div class="mb-3">
    <label for="exampleInputForename1" class="form-label">Forename</label>
    <input name="forename"  class="form-control" id="exampleInputForename1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone1" class="form-label">Phone Number</label>
    <input name="phone"  class="form-control" id="exampleInputPhone1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>