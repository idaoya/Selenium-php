<?php

require_once 'inc/Utility.php';
require_once 'inc/Authen.php';

function testSigninUsernameFailure($I) {
    $I->am('administrator');
    $I->wantTo('input incorrect username on sign in');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->fillField('username', 'wasana2016'); 
    $I->fillField('password', '1234');
    $I->expectTo('cannot sign in');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show warning message');
    $I->see('Username / Password is incorrect.');
    $I->seeCurrentUrlEquals('/');
    $I->see(Utility::TITLE_AUTHEN);
}

function testSigninPasswordFailure($I) {
    $I->am('administrator');
    $I->wantTo('input incorrect password on sign in');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->fillField('username', 'wasana'); 
    $I->fillField('password', '1234');
    $I->expectTo('cannot sign in');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show warning message');
    $I->see('Username / Password is incorrect.');
    $I->seeCurrentUrlEquals('/');
    $I->see(Utility::TITLE_AUTHEN);
}

function testSigninUsernameBlankFailure($I) {
    $I->am('administrator');
    $I->wantTo('Do not input username on sign in');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->fillField('username', null);
    $I->fillField('password', '1234');
    $I->expectTo('cannot sign in');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show warning message');
    $I->see('Username / Password is incorrect.');
    $I->seeCurrentUrlEquals('/');
    $I->see(Utility::TITLE_AUTHEN);
}

function testSigninPasswordBlankFailure($I) {
    $I->am('administrator');
    $I->wantTo('Do not input password on sign in');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->fillField('username', 'wasana');
    $I->fillField('password', null);
    $I->expectTo('cannot sign in');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show warning message');
    $I->see('Username / Password is incorrect.');
    $I->seeCurrentUrlEquals('/');
    $I->see(Utility::TITLE_AUTHEN);
}

function testSigninResetPassword($I) {
    $I->am('administrator');
    $I->wantTo('reset password');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->amOnPage('forgotpwd.php');
    $I->see('Reset password', 'h2');
    $I->seeInTitle('media|bank:forgot password');
    $I->dontSeeCurrentUrlEquals('/');
    $I->fillField('username', 'testname');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show complete message');
    $I->see('Password reset', 'h2');
}

function testSigninResetPasswordFailure($I) {
    $I->am('administrator');
    $I->wantTo('input incorrect username on reset password');
    $I->amGoingTo('authen page');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->amOnPage('forgotpwd.php');
    $I->see('Reset password', 'h2');
    $I->seeInTitle('media|bank:forgot password');
    $I->dontSeeCurrentUrlEquals('/');
    $I->fillField('username', 'wasana90');
    $I->expectTo('cannot reset password');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->expectTo('show warning message');
    $I->see('Unknown or deactivated account name', 'h3');
}

function testSignout($I) {
    $I->am('administrator');
    $I->wantTo('sign out');
    $I->amGoingTo('authen page');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Forgot your password?');
    $I->fillField('username', 'wasana');
    $I->fillField('password', 'Wasana90');
    $I->expectTo('can sign in');
    $I->click(Utility::SUBMIT_BUTTON);
    $I->see(Utility::TITLE_INDEX);
    $I->expectTo('see account information');
    $I->see('Logged in as: Wasana');
    $I->amGoingTo('sign out page');
    $I->click('//*[@id="toggleLoginInContainer"]/span/span');
    $I->see('Logged in', 'h2');
    $I->see('You are currently logged in to media|bank as');
    $I->seeInSource('<p class="text">Wasana</p>');
    $I->click('//*[@id="main"]/form/button');
    $I->expectTo('cannot see sign out link');
    $I->seeCurrentUrlEquals('/');
    $I->dontSee(Utility::TITLE_INDEX);
    $I->dontSee('Wasana');
}

function testRegisterNewCustomer($I) {
    $I->am('administrator');
    $I->wantTo('register a new customer');
    $I->amGoingTo('authen page');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Account');
    $I->amGoingTo('registration page');
    $I->amOnPage('customer_registration.html');
    $I->see('Register new customer', 'h3');
    $I->seeOptionIsSelected('company_account_type', 'adex');
    $I->dontSeeOptionIsSelected('company_account_type', 'postprod');
    $I->seeCheckboxIsChecked('#company_meta_invoiceByEmail');
    $I->fillField('#companyName', 'Oslo AS');
    $I->fillField('#companyPhone', '98 34 67 90');
    $I->fillField('#companyAddress', '45 B');
    $I->fillField('#companyZip', '0585');
    $I->fillField('#companyCity', 'Oslo');
    $I->fillField('#companyEmail', 'oslo@outlook.com');
    $I->selectOption('#companyCompanyCountry', 'Norway');
    $I->fillField('#personFullname_0', 'Ola');
    $I->fillField('#personEmail_0', 'Nordmann');
    $I->fillField('#personPassword_0', 'O90KiopD334');
    $I->fillField('#personPassword2_0', 'O90KiopD334');
    $I->click('#submitFormButton');
    $I->expectTo('show complete message');
    $I->see('Register new customer');
}

function testRegisterNewCustomerAddUser($I) {
    $I->am('administrator');
    $I->wantTo('add user on registration page');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Account');
    $I->amGoingTo('registration page');
    $I->amOnPage('customer_registration.html');
    $I->see('Register new customer', 'h3');
    $I->seeOptionIsSelected('company_account_type', 'adex');
    $I->dontSeeOptionIsSelected('company_account_type', 'postprod');
    $I->seeCheckboxIsChecked('#company_meta_invoiceByEmail');
    $I->fillField('#companyName', 'Thai Media AS');
    $I->fillField('#companyPhone', '90 77 21 54');
    $I->fillField('#companyAddress', '14 A');
    $I->fillField('#companyZip', '0584');
    $I->fillField('#companyCity', 'Oslo');
    $I->fillField('#companyEmail', 'media@outlook.com');
    $I->selectOption('#companyCompanyCountry', 'Norway');
    $I->fillField('#personFullname_0', 'Erne');
    $I->fillField('#personEmail_0', 'Solberg');
    $I->fillField('#personPassword_0', 'DUOsJ89as');
    $I->fillField('#personPassword2_0', 'DUOsJ89as');
    $I->wantTo('add a user');
    $I->click('#addUsers');
    $I->fillField('#personFullname_0', 'Ida');
    $I->fillField('#personEmail_0', 'Nordmann');
    $I->fillField('#personPassword_0', 'dfrgSW899');
    $I->fillField('#personPassword2_0', 'dfrgSW899');
    $I->click('#submitFormButton');
    $I->expectTo('show complete message');
    $I->see('Register new customer');
}

function testRegisterNewCustomerBlankFailure($I) {
    $I->am('administrator');
    $I->wantTo('do not input information on registration page');
    $I->amGoingTo(Utility::AUTHEN_PAGE);
    $I->amOnPage(Utility::URL_AUTHEN);
    $I->see(Utility::TITLE_AUTHEN);
    $I->seeLink('Account');
    $I->amGoingTo('registration page');
    $I->amOnPage('customer_registration.html');
    $I->see('Register new customer', 'h3');
    $I->seeOptionIsSelected('company_account_type', 'adex');
    $I->dontSeeOptionIsSelected('company_account_type', 'postprod');
    $I->seeCheckboxIsChecked('#company_meta_invoiceByEmail');
    $I->click('#submitFormButton');
    $I->expectTo('show warning message');
    $I->see('Alert', 'h4');
    $I->see('Please fill out all fields', 'p');
    $I->click('//*[@id="myModal"]/div/div/div[3]/button');
    $I->seeInCurrentUrl('/');
}

$I = new FunctionalTester($scenario);

testSigninUsernameFailure($I);
testSigninPasswordFailure($I);
testSigninUsernameBlankFailure($I);
testSigninPasswordBlankFailure($I);
testSigninResetPassword($I);
testSigninResetPasswordFailure($I);
testSignout($I);
testRegisterNewCustomer($I);
testRegisterNewCustomerAddUser($I);
testRegisterNewCustomerBlankFailure($I);