<div class="container">
    <div class="row ">
    <p class="text-muted">Parolanız en az 8 karakter uzunluğunda olmalı, en az bir büyük harf, bir rakam ve bir özel karakter içermelidir.</p>
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">
              <div class="register-logo">
                <b>DistLearn</b>REGISTER
              </div> 
            
  
    <div class="card">
      <div class="card-body register-card-body">
        
        
        <form  action="database/function.php" method="POST" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="İsim" name="customerName" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Soyisim" name="customerSurName" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="phone" name="customerPhone" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="E-Posta" name="eposta" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Parola" name="parola" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Parola Tekrar" name="reparola" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary" name="register">Kayıt Ol</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
       
  
        <a href="login.php" class="text-center">Zaten bir hesabım var</a>
      </div><!-- /.form-box -->
      
    </div><!-- /.card -->
    </div>
              </div>
          </div>
      </div>
  
      </body>
  </html>