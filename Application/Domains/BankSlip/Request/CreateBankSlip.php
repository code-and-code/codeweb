<?php

namespace BoletoFree\Domains\BankSlip\Request;

use BoletoFree\Support\Request\Request;

class CreateBankSlip extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
                    'emitente.nome'      => 'required',
                    'emitente.endereco'  => 'required',
                    'emitente.cep'       => 'required',
                    'emitente.uf'        => 'required',
                    'emitente.cidade'    => 'required',
                    'emitente.documento' => 'required',

                    'cliente.nome'      => 'required',
                    'cliente.endereco'  => 'required',
                    'cliente.cep'       => 'required',
                    'cliente.uf'        => 'required',
                    'cliente.cidade'    => 'required',
                    'cliente.documento' => 'required',

                    'dataVencimento'    => 'required',
                    'valor'             => 'required',
                    'multa'             => 'required', // porcento
                    'juros'             => 'required', // porcento ao mes
                    'juros_apos'        => 'required', // juros e multa após
                    'agencia'           => 'required', // BB, Bradesco, CEF, HSBC, Itáu
                    'conta'             => 'required', // BB, Bradesco, CEF, HSBC, Itáu, Santander
                    'contaDv'           => 'required', // Bradesco, HSBC, Itáu




                    'layout'            => 'in:caixa,bradesco,santader'
        ];
    }
}
