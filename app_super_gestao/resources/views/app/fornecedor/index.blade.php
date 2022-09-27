  <h3>Fornecedor</h3>


  @isset($fornecedores)

   @forelse($fornecedores as $indice => $fornecedor)
      Iteração atual: {{ $loop->iteration}}
      <br>
      Fornecedor: {{ $fornecedor['nome'] }}
      <br>
      Status: {{ $fornecedor['status'] }}
      <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
      <br>
      Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedores['telefone'] ?? '' }}
      <br>
    @if($loop->first)
       Primeira interação do Loop
    @endif

    @if($loop->last)
      Última interação do Loop
      <br>
      Total de registros: {{ $loop->count}}

    @endif
    <hr>
  @empty
     Não existem fornecedores cadastrados!!
  @endforelse
@endisset

