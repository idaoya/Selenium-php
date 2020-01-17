<?php

require_once 'inc/Utility.php';
require_once 'inc/Authen.php';

function testAdmin($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click admin -> show detail');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->expectTo('see information');
    $I->seeInTitle(Utility::TITLE_ADMIN);
    $I->see(Utility::ADMINISTRATION);
    $I->dontSee(Utility::REGISTER);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
    $I->dontSeeLink(Utility::FORGOT_YOUR_PASSWORD);
    $I->dontSeeLink(Utility::CREATE_NEW_ACCOUNT);
}

function testAppConfig($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> show detail');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_APP_CONFIG);
    $I->expectTo('see information');
    $I->see(Utility::SETTINGS_ON_COMPANY_LEVEL, 'div');
    $I->see(Utility::SETTINGS_ON_APPLICATION_LEVEL, 'div');
    $I->see(Utility::COMPANY, 'h3');
    $I->see(Utility::UPLAOD, 'h3');
    $I->see(Utility::REVIEW, 'h3');
    $I->see(Utility::COMPLIANCE, 'h3');
    $I->see(Utility::LIBRARY, 'h3');
    $I->see(Utility::SPORT, 'h3');
    $I->see(Utility::ADMIN, 'h3');
    $I->see(Utility::TRACKING, 'h3');
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

function testAppConfigCompany($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click company');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_COMPANY);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigUpload($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click upload');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_UPLOAD);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigReview($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click review');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_REVIEW);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigCompliance($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click compliance');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_COMPLIANCE);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigLibrary($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click library');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_LIBRARY);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigSport($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click sport');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_SPORT);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigAdmin($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click admin');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_ADMIN);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAppConfigTraking($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click appconfig -> click tracking');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ACCORDION_HEADER_TRACKING);
    $I->expectTo('see information');
    $I->see(Utility::ACTION);
    $I->see(Utility::ITEMS);
    $I->see(Utility::EDIT);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAccounts($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click accounts -> show detail');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ACCOUNT);
    $I->expectTo('see information');
    $I->see(Utility::MANAGE_GROUPS_AND_USERS, 'div');
    $I->see(Utility::GROUPS);
    $I->see(Utility::USERS);
    $I->see(Utility::GROUP_SEARCHS);
    $I->see(Utility::ADD_GROUP);
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAccountsGroups($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click accounts -> click groups');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ACCOUNT);
    $I->click(Utility::ACCORDION_HEADER_GROUP);
    $I->expectTo('see information');
    $I->see(Utility::ITEMS);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAccountsUsers($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click accounts -> click users');
    $I->amGoingTo('Admin page');
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ACCOUNT);
    $I->click(Utility::ACCORDION_HEADER_USERS);
    $I->expectTo('see information');
    $I->see(Utility::ITEMS);
    $I->see(Utility::ADD_USER);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testAccountsGroupSearches($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click accounts -> click Group searches');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ACCOUNT);
    $I->click(Utility::ACCORD_HEADER_GROUP_SEARCH);
    $I->expectTo('see information');
    $I->see(Utility::ITEMS);
    $I->seeNumberOfElements('td', Utility::EIGHT_NUMBER);
    $I->seeNumberOfElements('tr', Utility::FIVE_NUMBER);
}

function testMe($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click me -> show detail');
    $I->amGoingTo('Admin page');
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ME);
    $I->expectTo('see information');
    $I->see(Utility::PERSONAL_CONFIGURATION, 'h3');
    $I->see(Utility::THESE_ARE_SETTINGS);
    $I->see(Utility::SETTING);
    $I->see(Utility::VALUE);
    $I->see(Utility::SHOW_ASSETS_DURING_UPLOAD);
    $I->see(Utility::DEFAULT_ITEMS_PER_PAGE);
    $I->see(Utility::SHOW_TOOL_TIP);
    $I->see(Utility::SAVE_BUTTON);
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

function testMeShowAssetsDuringUpload($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click me -> change ShowAssetsDuringUpload -> click save');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ME);
    $I->selectOption(Utility::SHOW_ASSETS_DURING_UPLOAD, 'On');
    $I->click(Utility::SAVE_BUTTON_S);
    $I->expectTo('change information');
    $I->seeOptionIsSelected(Utility::SHOW_ASSETS_DURING_UPLOAD, 'On');
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

function testMeDefaultItemsPerPage($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click me -> change DefaultItemsPerPage -> click save');
    $I->amGoingTo('Admin page');
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ME);
    $I->fillField(Utility::DEFAULT_ITEMS_PER_PAGE, '20'); //20 per page
    $I->click(Utility::SAVE_BUTTON_S);
    $I->expectTo('change information');
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

function testMeShowToolTip($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click me -> change ShowToolTip -> click save');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ME);
    $I->selectOption(Utility::SHOW_TOOL_TIP, 'On');
    $I->click(Utility::SAVE_BUTTON_S);
    $I->expectTo('change information');
    $I->seeOptionIsSelected(Utility::SHOW_TOOL_TIP, 'On');
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

function testMeChangeAllDetail($I) {
    $I->am(Utility::ROLE_AUTHEN);
    $I->wantTo('click me -> change all detail -> click save');
    $I->amGoingTo(Utility::ADMIN_PAGE);
    $I->amOnPage(Utility::URL_ADMIN);
    $I->click(Utility::ADMIN_MENU_ELEMENT_ME);
    $I->selectOption(Utility::SHOW_ASSETS_DURING_UPLOAD, 'On');
    $I->fillField(Utility::DEFAULT_ITEMS_PER_PAGE, '20'); //20 per page
    $I->selectOption(Utility::SHOW_TOOL_TIP, 'On');
    $I->click(Utility::SAVE_BUTTON_S);
    $I->expectTo('change information');
    $I->seeOptionIsSelected(Utility::SHOW_ASSETS_DURING_UPLOAD, 'On');
    $I->seeOptionIsSelected(Utility::SHOW_TOOL_TIP, 'On');
    $I->seeCurrentUrlEquals(Utility::URL_ADMIN);
}

$I = new FunctionalTester($scenario);

Authen::testSignin($I);
testAdmin($I);
testAppConfig($I);
testAppConfigCompany($I);
testAppConfigUpload($I);
testAppConfigReview($I);
testAppConfigCompliance($I);
testAppConfigLibrary($I);
testAppConfigSport($I);
testAppConfigAdmin($I);
testAppConfigTraking($I);
testAccounts($I);
testAccountsGroups($I);
testAccountsUsers($I);
testAccountsGroupSearches($I);
testMe($I);
testMeShowAssetsDuringUpload($I);
testMeDefaultItemsPerPage($I);
testMeShowToolTip($I);
testMeChangeAllDetail($I);
Authen::testFooter($I);
Authen::testSignout($I);