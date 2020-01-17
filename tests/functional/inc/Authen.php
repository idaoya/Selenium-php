<?php

class Authen {

    function testSignin($I) {
        $I->wantTo('Sign in');
        $I->amOnPage(Utility::URL_AUTHEN);
        $I->fillField('username', Utility::USERNAME_AUTHEN);
        $I->fillField('password', Utility::PASSWORD_AUTHEN);
        $I->click(Utility::SUBMIT_BUTTON);
        $I->see(Utility::TITLE_INDEX);
    }

    function testSignout($I) {
        $I->wantTo('Sign out');
        $I->amOnPage(Utility::URL_AUTHEN);
        $I->click(Utility::SUBMIT_BUTTON);
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