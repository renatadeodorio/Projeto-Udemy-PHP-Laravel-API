<h3>Fornecedor</h3>


@isset($fornecedores)

  Fornecedor: {{ $fornecedores[0]['nome'] }}
  <br>
  Status: {{ $fornecedores[0]['status'] }}
  <br>
  @isset( $fornecedores[0]['cnpj'])
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
  @endisset
@endisset
