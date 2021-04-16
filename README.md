# Soluti Teste - Parte um

## _Rationale_

Foi evitado o uso de valores mágicos utilizando polimorfismo introduzido através da classe abstrata **Cargo** e das classes que a implementam **Desenvolvedor** e **Gerente**, sendo essa segunda originalmente considerada uma carreira, que ao meu ver, está incorreto.
Ainda nesse viés, adicionei a classe **Carreira**, responsável por guardar o salário, que à minha observação, é comumente variável (de acordo com a negociação).

Dessa forma acredito que **Funcionário**, **Cargo** e **Carreira** podem evoluir de forma independente ao contrário da versão original.

Utilizo as novas funcionalidades disponíveis no PHP 8.0 para um código mais conciso e seguro, que foram: _type hints_, _nullable type hints_, _return type declarations_ e _null-safe operator_.
