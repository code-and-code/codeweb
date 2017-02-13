@extends('layouts.home')

@section('content')

        <!-- Banner -->
<section id="banner">
    <h2>Boleto Free</h2>
    <p>Gere Boletos Sem Pagar Nada!</p>
    <ul class="actions">
        <li><a href="#" class="button special">Cadastre-se</a></li>
        <li><a href="{{route('free.create')}}" class="button">Gerar Boleto</a></li>
    </ul>
</section>

<!-- Main -->
<section id="main" class="container">

    <section class="box special">
        <header class="major">
            <h2>Veja como é simples e fácil gerar boletos.
                <br />
                Cadastre-se para maior funcionalidade!</h2>
            <p>Nossa idéia é facilitar sua vida, buscamos o jeito mais simples e seguro para emissão de boletos.
                <br/>Faça um cadastro e tenha creditos para emissão de boletos.
            </p>
        </header>

    </section>

    <section class="box special features">
        <div class="features-row">
            <section>
                <span class="icon major fa-bolt accent2"></span>
                <h3>Cadastro do Sacado</h3>
                <p>Ao se cadastrar, você terá acesso a uma área adminstradora completamente dinâmica, onde poderá registrar os dados do sacado e sempre os terá disponível quando precisar. </p>
            </section>
            <section>
                <span class="icon major fa-area-chart accent3"></span>
                <h3>Limite de Credito</h3>
                <p>No ambiente adminstrável, você receberá um limite de crédito, e poderá usa-lo para outras ações, como gerar segunda via por exemplo! :)</p>
            </section>
        </div>
        <div class="features-row">
            <section>
                <span class="icon major fa-cloud accent4"></span>
                <h3>Valores Baixíssimos</h3>
                <p>Você irá se impressionar com os valores dos pacotes. Você tem direito a emitir 10 boletos, e se prefererir pode adquirir um dos nossos pacotes para continuar usando.</p>
            </section>
            <section>
                <span class="icon major fa-lock accent5"></span>
                <h3>Completamente Seguro</h3>
                <p>Fique tranquilo, nós nos preocupamos com a sua segurança. Os dados registrados para a e-missão dos boletos estão completamente seguros e criptografados.</p>
            </section>
        </div>
    </section>

    <div class="row">
        <div class="6u 12u(narrower)">

            <section class="box special">
                <span class="image featured"><img src="images/pic7.png" alt=""></span>
                <h3>FREE</h3>
                <table>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Gerar Boleto</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Segunda Via</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-close"></td>
                        <td>Cadastro De Bancos</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-close"></td>
                        <td>Cadastro De Clientes</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-close"></td>
                        <td>Gerenciar Boletos</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-close"></td>
                        <td>Envio Por E-mail</td>
                    </tr>
                </table>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </section>

        </div>
        <div class="6u 12u(narrower)">

            <section class="box special">
                <span class="image featured"><img src="images/pic6.jpg" alt=""></span>
                <h3>VIP</h3>
                <table>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Gerar Boleto</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Segunda Via</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Cadastro De Bancos</td>
                    </tr>

                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Cadastro De Clientes</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Gerenciar Boletos</td>
                    </tr>
                    <tr>
                        <td><i class="icon fa-check"></td>
                        <td>Envio Por E-mail</td>
                    </tr>
                </table>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </section>

        </div>
    </div>
</section>



<section id="cta">

    <h2>Indique um Amigo!!</h2>
    <p>Indicando um amigo e caso ele realize um cadastro, você ganhará creditos!</p>

    <form>
        <div class="row uniform 50%">
            <div class="8u 12u(mobilep)">
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="4u 12u(mobilep)">
                <input type="submit" value="Enviar" class="fit" />
            </div>
        </div>
    </form>

</section>
@endsection
