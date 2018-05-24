package com.test.serenity.steps;

import com.google.common.base.Verify;
import com.test.serenity.ComputerDBSearchPage;
import com.test.serenity.ComputerDBResultsPage;
import net.thucydides.core.annotations.Step;
import org.junit.Assert;

import java.util.List;
import java.util.ListIterator;

public class ComputerDBSearchSteps {

    ComputerDBSearchPage searchPage;
    ComputerDBResultsPage resultsPage;

    @Step
    public void openComputerDBSearchPage() {
        searchPage.open();
    }

    @Step
    public void searchFor(String mes, String anho) {
        resultsPage = searchPage.searchFor(mes, anho);
    }

    @Step
    public void searchForMonth(String mes) {
        resultsPage = searchPage.searchForMonth(mes);
    }

    @Step
    public void searchForYear(String anho) {
        resultsPage = searchPage.searchForYear(anho);
    }

    @Step
    public void verifyResult(String searchResult) {
        List<String> results = resultsPage.getResultsList();
        Assert.assertTrue(results.contains(searchResult));
    }

    @Step
    public void verifyResultByMonth(String searchResult) {
        List<String> results = resultsPage.getResultsListByMonth();
        ListIterator<String> it = results.listIterator();
        while(it.hasNext()) {
            Assert.assertTrue(it.next().contains(searchResult));
        }
    }

    @Step
    public void verifyResultByYear(String searchResult) {
        List<String> results = resultsPage.getResultsListByYear();
        ListIterator<String> it = results.listIterator();
        while(it.hasNext()) {
            Assert.assertTrue(it.next().contains(searchResult));
        }
    }
}
