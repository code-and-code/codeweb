<?php

namespace BoletoFree\Core\Http\Controllers\Free;

use BoletoFree\Core\Http\Controllers\Controller;
use BoletoFree\Domains\BankSlip\Request\CreateBankSlip;
use Carbon\Carbon;

class BankSlipController extends Controller
{

    private $banks = [

        'caixa'       => '\Eduardokum\LaravelBoleto\Boleto\Banco\Caixa',
        'bradesco'    => '\Eduardokum\LaravelBoleto\Boleto\Banco\Bradesco',
        'santader'    => '\Eduardokum\LaravelBoleto\Boleto\Banco\Santander'
    ];

    public function create()
    {
        return view('home.create');
    }

    public function generate(CreateBankSlip $request)
    {
        $emitente  = new \Eduardokum\LaravelBoleto\Pessoa($request->input('emitente'));
        $cliente   = new \Eduardokum\LaravelBoleto\Pessoa($request->input('cliente'));

        $boletoArray = [
            'logo'           => storage_path('logo/boleto001.jpg'), // Logo da empresa
            'dataVencimento' => Carbon::parse($request->input('dataVencimento')),
            'valor'          => $request->input('valor'),
            'multa'          => $request->input('multa'),
            'juros'          => $request->input('juros'),
            'juros_apos'     =>  1, // juros e multa após
            'diasProtesto'   => false, // protestar após, se for necessário
            'numero'         => 1,
            'numeroDocumento'=> 1,
            'pagador'        => $cliente,       // Objeto PessoaContract
            'beneficiario'   => $emitente, // Objeto PessoaContract
            'agencia'          => $request->input('agencia'), // BB, Bradesco, CEF, HSBC, Itáu
            'agenciaDv'        => $request->input('agenciaDv'), // se possuir
            'conta'            => $request->input('conta'), // BB, Bradesco, CEF, HSBC, Itáu, Santander
            'contaDv'          => $request->input('contaDv'), // Bradesco, HSBC, Itáu
            'carteira'         => 'SR', // BB, Bradesco, CEF, HSBC, Itáu, Santander
            'convenio'         => 9999999, // BB
            'variacaoCarteira' => 99, // BB
            'range' => 99999, // HSBC
            'codigoCliente'          => 99999, // Bradesco, CEF, Santander
            'ios' => 0, // Santander
            'descricaoDemonstrativo' => ['Pagamento Teste', 'Mensalidade referente', 'Em caso de dúvidas entre em contato conosco:'], // máximo de 5
            'instrucoes'             => ['Sr. Caixa, cobrar multa de 2% após o vencimento', 'Receber até 10 dias após o vencimento'], // máximo de 5
            'aceite'                 => 0,
            'especieDoc'             => 'DM',
        ];

        if(key_exists($request->input('layout'),$this->banks))
        {
            $boleto = new $this->banks[$request->input('layout')]($boletoArray);
            $this->saveBankSlip($boleto);
        }
        return 'error';
    }

    private function saveBankSlip($BankSlip)
    {
        $pdf = new \Eduardokum\LaravelBoleto\Boleto\Render\Pdf();
        $pdf->addBoleto($BankSlip);
        $pdf->gerarBoleto();
    }
}
