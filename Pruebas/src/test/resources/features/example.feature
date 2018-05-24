Feature: Filtro de Utilidad Bruta
  De acuerdo a la utilidad bruta
  como usuario generico
  quiero ser capaz de filtrar la informacion por mes y año

  Scenario Outline: Filtro de Utilidad por mes y año
    Given Quiero filtrar las utilidades
    When seleccione el mes '<month>' y año '<year>'
    Then Deberia obtener como utilidad bruta '<utility>'
    Examples:
    | month   | year  | utility      |
    | enero   | r2016 | 5676010.0000 |
    | febrero | r2015 | 4923371.5000 |
    | julio   | r2014 | 5606666.0000 |


  Scenario: Filtro de Utilidad por mes
    Given Quiero filtrar las utilidades
    When seleccione el mes de 'enero'
    Then deberia obtener resultados solo con el mes 'Enero'

  Scenario: Filtro de Utilidad por año
    Given Quiero filtrar las utilidades
    When seleccione el año 'r2015'
    Then deberia obtener resultados solo con el año '2015'