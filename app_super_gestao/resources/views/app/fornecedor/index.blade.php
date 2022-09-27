<h3>Fornecedor</h3>


@isset($fornecedores)

 @foreach($fornecedores as $indice => $fornecedor)
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    <br>
    CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedores['telefone'] ?? '' }}
    <hr>
  @endforeach
@endisset


