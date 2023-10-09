<?php 

// include_once "Dao/conexãoDAO.php";
// include_once "Model/usuario.php";
// include_once "Dao/usuarioDAO.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{('assets/css/logincadastro/index.css')}}">


    <title>serMãe</title>
    <style>
        .text-danger {
            color: red;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="Controller/usuarioController.php" method="post" class="sign-in-form">
                    <h2 class="title">Logar</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="loginEmail" id="" placeholder="Email">  
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="*****" name="loginSenha">
                    </div>

                    <div>
                    </div>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "erro") {
                    ?>
                        <div style="text-align: center; font-weight:bold">
                            <p class="text-danger">Usuário ou senha inválido(s)</p>
                        </div>
                    <?php
                    }
                    ?>

                    <input type="submit" class="btn solid" name="login">
                    <p class="social-text">Gerencie agora:</p>
                    <div class="social-media">
                        <a href="Views/admin/loginADM.php" class="social-icon">
                            <i class="fa-solid fa-cube"></i>
                        </a>
                    </div>
                </form>
            </div>


            <div class="signup-signup">
                <form action="{{ route('cadastro')}}" method="POST" class="sign-up-form" id="myForm">
                    <h1 class="text-registro">Cadastro</h1>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                        @endforeach
                    @endif
                    @csrf
                    <!--progress bar-->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step progress-step-active" data-title="Nome"></div>
                        <div class="progress-step" data-title="Contato"></div>
                        <div class="progress-step" data-title="Idade"></div>
                        <div class="progress-step" data-title="Senha"></div>
                    </div>
                    <!--steps-->
                    <div class="form-step form-step-active">
                        <div class="input-group">
                            <input type="text" name="nome" id="username" placeholder="Nome" required>
                        </div>
                        <div class="input-group">
                            <input type="text" name="sobrenome" id="position" placeholder="Sobrenome" required>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-next width-50 ml-auto" id="open-modal">Próximo</a>
                        </div>

                    </div>
                    <div class="form-step">
                  
                        <div class="input-group">
                            <input type="tel" name="phone" id="phone_with_ddd" placeholder="Telefone">
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </div>
                
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <a href="#" class="btn btn-next">Próximo</a>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="input-group">
                            <input type="date" name="dataNasc" id="dob" placeholder="Data nascimento">
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <a href="#" class="btn btn-next">Próximo</a>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="input-group">
                            <input type="password" name="password" id="password" placeholder="Senha">
                        </div>
                        <div class="input-group">
                            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmar senha">
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <button type="submit" class="btn">Pronta</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nova aqui?</h3>
                    <p>
                        Crie sua conta agora!
                    </p>
                    <button class="btn transparent" id="sign-up-button">Criar conta</button>
                </div>
                <img src="{{('assets/img/loginCadastro/serMãe.png')}}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Venha fazer parte<br>desse mundo</h3>
                    <p>A melhor rede social de apoio<br>para mulheres
                    </p>
                    <button class="btn transparent" id="sign-in-button">Logar</button>
                </div>
                <img src="{{('assets/img/loginCadastro/serMãe.png')}}" class="image" alt="">
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#phone_with_ddd').mask('(00) 00000-0000');
    </script>


    <script src="{{('assets/js/loginCadastro/app.js')}}"></script>

</body>

</html>