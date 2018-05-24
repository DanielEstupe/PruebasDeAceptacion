package com.test.serenity;

import net.serenitybdd.core.pages.PageObject;
import net.thucydides.core.annotations.WhenPageOpens;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;

import java.util.ArrayList;
import java.util.List;

public class ComputerDBResultsPage extends PageObject {
    @FindBy(className = "utility")
    private List<WebElement> utilityList;

    @FindBy(className = "months")
    private List<WebElement> monthList;

    @FindBy(className = "years")
    private List<WebElement> yearList;

    public ComputerDBResultsPage(WebDriver driver) {
        super(driver);
    }

    @WhenPageOpens
    public void waitForPage() {
        // wait for google sub menu: Web | Images | Videos | ...
        //$("#hdtb-msb").waitUntilVisible();
    }

    public List<String> getResultsList() {
        List<String> resultList = new ArrayList<>();
        for (WebElement element : utilityList) {
            resultList.add(element.getText());
        }
        return resultList;
    }

    public List<String> getResultsListByMonth() {
        List<String> resultList = new ArrayList<>();
        for (WebElement element : monthList) {
            resultList.add(element.getText());
        }
        return resultList;
    }

    public List<String> getResultsListByYear() {
        List<String> resultList = new ArrayList<>();
        for (WebElement element : yearList) {
            resultList.add(element.getText());
        }
        return resultList;
    }
}
