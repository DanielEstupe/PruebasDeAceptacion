package com.test.serenity.stepDefinitions;

import com.test.serenity.steps.ComputerDBSearchSteps;
import cucumber.api.java.en.Given;
import cucumber.api.java.en.Then;
import cucumber.api.java.en.When;
import net.thucydides.core.annotations.Steps;

public class ComputerDBSearchStepDefinitions {

    @Steps
    ComputerDBSearchSteps computerDBSearchSteps;

    @Given("Quiero filtrar las utilidades")
    public void quieroFiltrarLasUtilidades() throws Throwable {
        computerDBSearchSteps.openComputerDBSearchPage();
    }

    @When("seleccione el mes '(.*)' y año '(.*)'")
    public void seleccioneElMesYAnho(String mes, String anho) throws Throwable {
        computerDBSearchSteps.searchFor(mes, anho);
    }

    @Then("Deberia obtener como utilidad bruta '(.*)'")
    public void deberiaObtenerComoUtilidadBruta(String searchResult) throws Throwable {
        computerDBSearchSteps.verifyResult(searchResult);
    }

    // segundo step

    @When("seleccione el mes de '(.*)'")
    public void seleccioneElMesDe(String mes) throws Throwable {
        computerDBSearchSteps.searchForMonth(mes);
    }

    @Then("deberia obtener resultados solo con el mes '(.*)'")
    public void deberiaObtenerResultadosSoloConMes(String searchResult) throws Throwable {
        computerDBSearchSteps.verifyResultByMonth(searchResult);
    }

    // tercer paso
    @When("seleccione el año '(.*)'")
    public void seleccioneElAnho(String anho) throws Throwable {
        computerDBSearchSteps.searchForYear(anho);
    }

    @Then("deberia obtener resultados solo con el año '(.*)'")
    public void deberiaObtenerResultadosSoloConAnho(String searchResult) throws Throwable {
        computerDBSearchSteps.verifyResultByYear(searchResult);
    }
}
