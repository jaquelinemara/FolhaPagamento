# Folha de Pagamento

Sistema para calcular a folha de pagamento de um funcionário a partir do número de horas trabalhadas e do valor/hora de trabalho

## Conteúdo

* O sistema deverá apresentar um formulário na index para ler:
    * Nome do funcionário
    * Número de horas trabalhadas
    * Valor da hora de trabalho
* Após preenchimento do formulário, enviar os dados via POST para a página ‘pagamento.php’, que deverá receber os dados e validá-los:
    * Não permitir que o formulário seja enviado em branco
    * Se os dados foram enviados corretamente, o sistema deverá mostrar os dados enviados (nome do funcionário, valor da hora trabalhada e quantidade de horas trabalhadas). 
* Além disso, o sistema deverá calcular e mostrar:
    * Salário bruto
    * Importo de Renda
    * INSS
    * FGTS
    * Salário líquido
    
    **Considerações para os cálculos:**
    
    *Imposto de Renda (valores fictícios)*
         
    |  Salário Bruto  |Desconto (%)|
    |---------------	|------------|
    |Até R$ 1.372,81	|      0	   |
    |Até R$ 1.372,81	|      15	   |
    |Acima de 2.743,25|      27,5 	|      

    *INSS (valores fictícios)*
         
    |           Salário Bruto       |  Desconto  |
    |-----------------------------	|------------|
    |      Até R$ 868,29          	|      8 %   |
    |De R$ 868,30 até R$ 1.447,14   |      9 %   |
    |De R$ 1.447,15 até R$ 2.894,28 |      11 %  |
    |     Acima de R$ 2.894,28      | R$ 318,37  |       
    
    *FGTS (valores fictícios)*  
    
    Para calcular o FGTS basta extrair **8% do salário bruto**       
    
    *Salário líquido (valores fictícios)*          
    
    Para calcular o salário líquido: **Salário bruto – IR – INSS**  
