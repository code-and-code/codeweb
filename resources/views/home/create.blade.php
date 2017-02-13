@extends('layouts.home')

@section('content')
        <!-- Main -->
<section id="main" class="container ">
    <header>
        <h2>Gerar Boleto</h2>
        <p>Preencha os campos abaixo para gerar um boleto.</p>
    </header>
    <form method="POST" action="{{route('free.generate')}}">

        <div class="box">
            <h3>Emitente</h3>
            <div class="row uniform 50%">
                <div class="12u">
                    <input type="text" name="emitente[documento]" id="document" value="" placeholder="CPF/CNPJ" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="emitente[nome]" id="nome" value="" placeholder="Nome" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="email" name="emitente[email]" id="email" value="" placeholder="Email" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="emitente[endereco]" id="endereco" value="" placeholder="Endereço" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="emitente[cep]" id="cep" value="" placeholder="Cep" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="emitente[cidade]" id="cidade" value="" placeholder="Cidade" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="emitente[uf]" id="uf" value="" placeholder="UF" />
                </div>
            </div>

        </div>
        <div class="box">
            <h3>Cliente</h3>
            <div class="row uniform 50%">
                <div class="12u">
                    <input type="text" name="cliente[documento]" id="" value="" placeholder="CPF/CNPJ" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="cliente[nome]" id="name" value="" placeholder="Nome" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="email" name="cliente[email]" id="email" value="" placeholder="Email" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="cliente[endereco]" id="name" value="" placeholder="Endereço" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="cliente[cep]" id="email" value="" placeholder="Cep" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="cliente[cidade]" id="name" value="" placeholder="Cidade" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="cliente[uf]" id="email" value="" placeholder="UF" />
                </div>
            </div>
        </div>
        <div class="box">
            <h3>Conta Bancária</h3>
            <div class="row uniform 50%">
                <div class="12u">
                    <div class="select-wrapper">
                        <select name="layout" id="layout">
                            <option value="">Selecione Seu Banco </option>
                            <option value="caixa">Caixa</option>
                            <option value="bradesco">Bradesco</option>
                            <option value="santander">Santander</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="agencia" id="name" value="" placeholder="Agência" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="agenciaDv" id="name" value="" placeholder="Digito Da Agência,se possuir" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="conta" id="name" value="" placeholder="Conta" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="contaDv" id="email" value="" placeholder="Digito Da Conta" />
                </div>
            </div>

        </div>
        <div class="box">
            <h3>Boleto</h3>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="dataVencimento" id="name" value="" placeholder="Data de Vencimento" />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="valor" id="name" value="" placeholder="valor" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="multa" id="email" value="" placeholder="Multa %" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="juros" id="name" value="" placeholder="Juros (%) após o vencimento " />
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="juros_apos" id="email" value="" placeholder="Juros por dia de atrazo" />
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
                    <input type="text" name="descricaoDemonstrativo[]" value="Pagamento Teste"/>
                </div>
                <div class="6u 12u(mobilep)">
                    <input type="text" name="instrucoes[]" value="Sr. Caixa, cobrar multa de 2% após o vencimento"/>
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="submit" value="Gerar Boleto" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
