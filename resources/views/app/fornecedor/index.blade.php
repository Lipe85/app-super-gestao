<h3>Fornecedor</h3>

{{--Fica o comentário que será descartado pelo interpretador blade--}}

{{-- @dd($fornecedores) --}}

@isset($fornecedores)

   @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Vazio'}}
        <br />
        Telefone: {{ $fornecedor['ddd'] ?? ''}} {{ $fornecedor['telefone'] ?? ''}}
        <hr />
    @endforelse
@endisset

    