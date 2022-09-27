<h3>Fornecedor</h3>


@isset($fornecedores)

  Fornecedor: {{ $fornecedores[1]['nome'] }}
  <br>
  Status: {{ $fornecedores[1]['status'] }}
  <br>
  CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
  <br>
  Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
  @switch ($fornecedores[1]['ddd'])
      @case ('11')
         São Paulo - SP
         @break
      @case ('32')
         Juiz de Fora - MG
         @break
      @case ('85')
         Fortaleza - CE
         @break
      @default
         Estado não identificado
    @endswitch
@endisset
