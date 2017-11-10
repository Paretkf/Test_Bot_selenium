require('chromedriver');
var webdriver = require('selenium-webdriver'),
    By = webdriver.By,
    until = webdriver.until;
var driver = new webdriver.Builder()
    .forBrowser('chrome')
    .build();
driver.get('http://localhost:8080/DB/');
for (var i = 0; i <10; i++) {
  driver.findElement(By.name('id')).sendKeys(6006+i);
  driver.findElement(By.name('name')).sendKeys('baiyok0'+(i+1));
  driver.findElement(By.name('age')).sendKeys('40');
  driver.findElement(By.name('gender')).sendKeys('male');
  driver.findElement(By.name('submit')).click();
}

// driver.wait(until.titleIs('webdriver - Google Search'), 1000);
// driver.quit();
