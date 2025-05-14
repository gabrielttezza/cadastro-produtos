# Testes Manuais de Integração – Cadastro de Produtos

| #  | Entradas Utilizadas                                     | Resultado Esperado                       | Resultado Obtido                        | Status  |
|----|----------------------------------------------------------|------------------------------------------|------------------------------------------|---------|
| 1  | Nome: Caneta Azul, Preço: 2.50, Descrição: Azul          | Produto cadastrado com sucesso           | Produto cadastrado com sucesso           | Passou  |
| 2  | Nome: "", Preço: 3.00, Descrição: Sem nome               | Erro: Dados inválidos                    | Erro: Dados inválidos                    | Passou  |
| 3  | Nome: Lápis, Preço: -1.00, Descrição: de cor             | Erro: Preço inválido                     | Erro: Dados inválidos                    | Passou  |
| 4  | Nome: Borracha, Preço: 0.00, Descrição: branca           | Erro: Preço inválido                     | Erro: Dados inválidos                    | Passou  |
| 5  | Nome: Régua, Preço: abc, Descrição: plástica             | Erro: Preço inválido (não numérico)      | Produto não cadastrado / erro no envio   | Falhou  |
