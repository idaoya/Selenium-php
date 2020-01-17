<?php

class Authen {

    function testSignin($I) {
        $I->wantTo('Sign in');
        $I->amOnPage(Utility::URL_AUTHEN);
        $I->click('Sign in');
        $I->fillField('username', Utility::USERNAME_AUTHEN);
        $I->fillField('password', Utility::PASSWORD_AUTHEN);        
        $I->click(Utility::SUBMIT_BUTTON); 
        $I->click('//*[@id="loginForm"]/div[4]/button');
        $I->see(Utility::TITLE_INDEX);
    }

    function testSignout($I) {
        $I->wantTo('Sign out');
        $I->seeLink('Logout', '../../login.php?logout=1');
        $I->click('Logout');
        $I->dontSee(Utility::TITLE_INDEX);
    }

    function testFooter($I) {
        $I->wantTo('Show footer');
        $I->see(Utility::VERSION);
        $I->see(Utility::COMPANY_NAME);
        $I->see(Utility::LOGGED_IN_BY);
        $I->see(Utility::FINNA_VERSION);
    }

    function testFooterTracking($I) {
        $I->wantTo('Show footer tracking');
        $I->see(Utility::FOOTER_TRACKING);
    }
}