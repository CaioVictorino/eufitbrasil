@include('snippets.header')

<body class="login-page" style="min-height: 466px;">
    
    
    <div class="login-box">
    
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="../../index2.html" class="h1"><b>Alisson</b>Lopes</a>
    </div>
    <div class="card-body">
    <p class="login-box-msg">Iniciar Sessão</p>
    <form action="../../index3.html" method="post">
    <div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="Email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-lock"></span>
    </div>
    </div>
    </div>
    <div class="row">
    
    <div class="col-12">
    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </div>
    
    </div>
    </form>
    </div>
    
    </div>
    
    </div>
    
    @include('snippets.footer')
</body>