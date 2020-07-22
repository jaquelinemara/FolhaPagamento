# Folha de Pagamento

System for calculating an employee's payroll based on the number of hours worked and the value/hour of work.

## Content

* The system must present a form in the index to read:
    * Employee name
    * Number of hours worked
    * Hourly rate
* After completing the form, send the data via POST to the ‘payment.php’ page, which should receive the data and validate it:
    * Do not allow the form to be sent blank
    * If the data was sent correctly, the system should show the data sent (name of employee, value of hours worked and number of hours worked).
* In addition, the system should calculate and show:
    * Salary without discounts (called "Salário bruto")
    * Income Tax (called "Imposto de Renda")
    * INSS
    * FGTS
    * Salary with discounts
    
    **Considerations for calculations:**
    
    *Imposto de Renda (fictitious values)*
         
    |  Salário Bruto  |Discount (%)|
    |---------------	|------------|
    |Until R$ 1.372,81	|      0	   |
    |Until R$ 1.372,81	|      15	   |
    |Up to 2.743,25|      27,5 	|      

    *INSS (fictitious values)*
         
    |           Salário Bruto       |  Discount  |
    |-----------------------------	|------------|
    |      Until R$ 868,29          	|      8 %   |
    | R$ 868,30 - R$ 1.447,14   |      9 %   |
    | R$ 1.447,15 - R$ 2.894,28 |      11 %  |
    |     Up to R$ 2.894,28      | R$ 318,37  |       
    
    *FGTS (fictitious values)*  
    
    To calculate the FGTS simply extract **8% of "Salário Bruto"**       
    
    *Salário Líquido (fictitious values)*          
    
    To calculate "Salário Líquido": **"Salário Bruto" – IR – INSS**  
