<?php include 'header.php';?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card bg-light shadow my-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="confirmarsenha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmarsenha" id="confirmarsenha" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar-se</button>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="login.php">Clique aqui!</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'footer.php';?>
