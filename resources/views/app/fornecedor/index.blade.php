<h3>Fornecedor</h3>

{{--Fica o comentário que será descartado pelo interpretador blade--}}

{{-- $fornecedores[1]['nome'] --}}

@isset($fornecedores)
   @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Vazio'}}
        <br />
        Telefone: {{ $fornecedor['ddd'] ?? ''}} {{ $fornecedor['telefone'] ?? ''}}
        <hr />
    @endforeach
@endisset
    