<h3>Fornecedor</h3>


@isset($fornecedores)

  Fornecedor: {{ $fornecedores[1]['nome'] }}
  <br>
  Status: {{ $fornecedores[1]['status'] }}
  <br>
  CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}

@endisset
