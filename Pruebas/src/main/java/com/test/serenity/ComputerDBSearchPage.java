package com.test.serenity;

import net.serenitybdd.core.pages.PageObject;
import net.thucydides.core.annotations.DefaultUrl;
import net.thucydides.core.annotations.WhenPageOpens;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;

import java.util.ArrayList;
import java.util.List;

@DefaultUrl("http://localhost:8082/Proyecto_Web/views/utilidad_bruta.php")
public class ComputerDBSearchPage extends PageObject {
    @FindBy(id = "btnSubmit")
    private WebElement botonSubmit;

    public ComputerDBSearchPage(WebDriver driver) {
        super(driver);
    }

    @WhenPageOpens
    public void waitUntilComputerDBFormAppears() {
        //$("#form").waitUntilVisible();
    }

    public ComputerDBResultsPage searchFor(String mes, String anho) {
        $("#"+mes).click();
        $("#y"+anho).click();
        botonSubmit.click();
        return new ComputerDBResultsPage(getDriver());
    }

    public ComputerDBResultsPage searchForMonth(String mes) {
        $("#"+mes).click();
        botonSubmit.click();
        return new ComputerDBResultsPage(getDriver());
    }

    public ComputerDBResultsPage searchForYear(String anho) {
        $("#y"+anho).click();
        botonSubmit.click();
        return new ComputerDBResultsPage(getDriver());
    }

}
