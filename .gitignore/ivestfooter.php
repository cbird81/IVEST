     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">
                Login
            </button>
          </div>
        </div>
      </div>
    </div>
 
    <div class="modal fade" id="loginRegister" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Register an Account</h4>
          </div>
          <div class="modal-body">
           
            <form action="helpers/register.php" method="post">
              <div class="form-group">
                <label for="name">First name</label>
                <input type="text" class="form-control" id="first_name" placeholder="First name" name="first_name">
              </div>
              <div class="form-group">
                <label for="name">Last name</label>
                <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
              </div>
              <div class="form-group">
                <label for="shares">Shares</label>
                <input type="email" class="form-control" id="shares" placeholder="shares" name="shares">
              </div>
              <div class="form-group">
                <label for="shares">Available Investments</label>
                <input type="Available Investments" class="form-control" id="Available Investments" placeholder="Available Investments" name="Available Investments">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-default">Register</button>
            </form>
 
          </div>
        </div>
      </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>