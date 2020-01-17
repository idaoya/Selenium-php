<?php
 
class Utility {
    
    /**Authen**/   
    const URL_AUTHEN= 'http://localhost/thaimedia';
    const ADMIN_PAGE = 'Admin Page';
    const AUTHEN_PAGE = 'Authen Page'; 
    const USERNAME_AUTHEN = 'wasana';
    const PASSWORD_AUTHEN = 'Wasana90';
    const PASSWORD_FAILURE_AUTHEN = '1234';
    const NAME_AUTHEN = 'Wasana L.';
    const ROLE_AUTHEN = 'Administrator';
    
    /**Footer**/
    const VERSION = 'Media v 2.8.0.2 ©2020';
    const COMPANY_NAME ='Thai Media AS';
    const LOGGED_IN_BY = 'Logged in as Wasana [3006 - Thai Media AS])'; 
    const FINNA_VERSION = '(7.0.4)';     
     
    /**Footer only tracking**/
    const FOOTER_TRACKING = 'For further information contact the Thai Media team: support@thaimedia.no';
     
    /**URL**/      
    const URL_COMMERCIAL = '/apps/upload/?utype=commercial';
    const URL_UPLOAD = '/apps/upload/?utype=frontpage';
    const URL_REVIEW = '/apps/review/';
    const URL_LIBRARY= '../../apps/library';   
    const URL_SPORT= '/apps/sport';
    const URL_ADMIN= '/apps/admin/';
    const URL_TRACKING= '/apps/tracking';  
    const URL_ACCEPT = '/apps/upload/static/termsAndConditions.html';
    
    /**Tab**/
    const FILTERS_TAB = '/apps/sport/#filters';
    const EVENTTAGS_TAB_CONTENT = '/apps/sport/#eventtags-tab-content';
    const EVENTINFO_TAB_CONTENT = '/apps/sport/#eventinfo-tab-content';
    const CLIPLIST_TAB_CONTENT = '/apps/sport/#cliplist-tab-content';
    const EVENTSEARCH_TAB_CONTENT = '/apps/sport/#eventsearch-tab-content';
    const EVENTINFO_TAB_STATISTICS = '/apps/sport/#tab-eventinfo-statistics';
    const EVENINFO_TAB_LINEUP = '/apps/sport/#tab-eventinfo-lineup';
    
    /**Page**/    
    const PAGE_ADEX = 'AdEx';
    const PAGE_FEEDBACK = 'feedback';
    const PAGE_HELP = 'help';
    const PAGE_BROWSE = 'BROWSE';
    const PAGE_DESTINATIONS = 'DESTINATIONS';
    const PAGE_OPTIONS = 'OPTIONS';
    const PAGE_NOTIFICATIONS = 'NOTIFICATIONS';
    const PAGE_SUMMARY = 'SUMMARY';
    const PAGE_CHECKOUT = 'CHECKOUT';    
    const PAGE_ADD_EDIT_DESTINATIONS = 'ADD/EDIT DESTINATIONS';
    const PAGE_ADD_EDIT_NOTIFICATIONS = 'ADD/EDIT NOTIFICATIONS';
    const PAGE_QUEUE = 'queue';           
    
    /**Title**/    
    const TITLE_AUTHEN = 'ThaiMedia - Makes life easier';
    const TITLE_INDEX = 'Media|Bank';
    const TITLE_ADEX = 'Media|Bank:Upload'; 
    const TITLE_UPLOAD = 'Media|Bank:Upload'; 
    const TITLE_ADMIN = 'Media|Bank:Admin ';
    const TITLE_LIBRARY = 'Media|Bank:Library';
    const TITLE_REVIEW = 'Media|Bank:Review';
    const TITLE_SPORT = 'Media|Bank';
    const TITLE_TRACKER = 'File tracker';
    
     /**----------------------------------Text--------------------------------------**/    
    const FORGOT_YOUR_PASSWORD = 'Forgot your password?';
    const CREATE_NEW_ACCOUNT = 'Create new account';
    const NAME = 'name';
    const MAKE_NEW_LIST = 'Make new list';
    const BACK_TO_FILES = 'Back to Files';
    const EDIT = 'edit';
    const LIBRARY = 'Library';
    const DESTINATIONS = 'DESTINATIONS';
    const ADD_FILES = 'ADD FILES';
    const TEXT_ADD_NEW_METADATA_TEMPLATE = 'Add new metadata template';
    const REV = 'Rev';
    const STATUS = 'Status';
    const ACTIVE = 'Active';
    const CANCEL = 'Cancel';
    const SAVE = 'Save';
    const ACTIVE_LIST_FOR_THIS_ASSET = 'Active list for this asset:';   
    const TERMS_AND_CONDITIONS = 'terms and conditions';
       
    /**Admin**/     
    const ADMINISTRATION = 'Administration'; 
    const REGISTER = 'Register';
    const SETTINGS_ON_COMPANY_LEVEL = 'Settings on company level';
    const SETTINGS_ON_APPLICATION_LEVEL = 'Settings on application level';
    const COMPANY = 'company';
    const UPLAOD = 'upload';
    const REVIEW = 'review';
    const COMPLIANCE = 'compliance';     
    const SPORT = 'sport';
    const ADMIN = 'admin';
    const TRACKING = 'tracking';
    const MANAGE_GROUPS_AND_USERS = 'Manage groups and users';
    const GROUPS = 'groups';
    const USERS = 'users';
    const GROUP_SEARCHS = 'Group searches';
    const PERSONAL_CONFIGURATION= 'Personal configuration (beta)';
    const THESE_ARE_SETTINGS= 'These are settings related to your user and only applies to you.';
    const SETTING = 'Setting';
    const VALUE = 'Value';
    const ACTION = 'action';
    const ITEMS = 'items';
    const ADD_GROUP = 'Add group';
    const ADD_USER = 'Add user';
  
    /**NUMBER**/
    const ZERO_NUMBER = 0;
    const THREE_NUMBER = 3;
    const FIVE_NUMBER = 5;
    const EIGHT_NUMBER = 8;
    
    /**ERROR**/
    const PAGE_NOT_FOUND = 'sorry. Page not found (404)';
    
    /**PARAMETER TEST**/
    const EMAIL = 'test@gmail.com'; 
    
     /**Button**/
    const SUBMIT_BUTTON = 'button[type=submit]';
    const X_BUTTON = 'X';
    const CANCEL_BUTTON = 'CANCEL';
    const SAVE_BUTTON = 'SAVE';
    const BROWSE_BUTTON = 'BROWSE';
    const SEARCH_BUTTON = 'search';
    const CANCEL_BUTTON_S = 'Cancel';
    const SAVE_BUTTON_S = 'Save';
    
    /**XPATH **/
    const ADD_NEW_DESTINAION  = '//*[@id="addNewDestination"]';
    const UPLOAD_DESTINATION_IMG = '//*[@id="uploadDestinations"]/img';
    const UPLOAD_CONTAINER_DESTINATION = '//*[@id="uploadContainerDestinations"]/div[3]/div/div/div/button';
    const ADD_NEW_METADATA_TEMPLATE = '//*[@id="addNewMetadataTemplate"]';    
    const ADD_LIBRARY_FIELD = '//*[@id="addLibraryFields"]';
    const NEW_FIELD = '//*[@id="newField"]';
    const SAVE_OPTION = '//*[@id="saveOption"]';
    const UPLOAD_NOTIFICATION = '//*[@id="uploadNotifications"]/img';
    const NOTIFICATION_ADD = '//*[@id="notification-add"]';
    const UPLOAD_SUMMARY = '//*[@id="uploadCheckout"]/div[1]/img';
    const SAVE_NEW_NOTIFICATION = '//*[@id="saveNewNotification"]';
    const ADMIN_MENU_ELEMENT_APP_CONFIG = '//*[@id="adminMenuElementAppconfig"]';
    const ACCORDION_HEADER_COMPANY = '//*[@id="accordionHeader-company"]';
    const ACCORDION_HEADER_UPLOAD = '//*[@id="accordionHeader-upload"]';
    const ACCORDION_HEADER_REVIEW ='//*[@id="accordionHeader-review"]';
    const ACCORDION_HEADER_COMPLIANCE = '//*[@id="accordionHeader-compliance"]';
    const ACCORDION_HEADER_LIBRARY = '//*[@id="accordionHeader-library"]';
    const ACCORDION_HEADER_SPORT = '//*[@id="accordionHeader-sport"]';
    const ACCORDION_HEADER_ADMIN = '//*[@id="accordionHeader-admin"]';
    const ACCORDION_HEADER_TRACKING = '//*[@id="accordionHeader-tracking"]'; 
    const ADMIN_MENU_ELEMENT_ACCOUNT = '//*[@id="adminMenuElementAccounts"]';
    const ACCORDION_HEADER_GROUP = '//*[@id="accordionHeader-groups"]';
    const ACCORDION_HEADER_USERS = '//*[@id="accordionHeader-users"]';
    const ACCORD_HEADER_GROUP_SEARCH = '//*[@id="accordionHeader-GroupSearches"]';
    const ADMIN_MENU_ELEMENT_ME= '//*[@id="adminMenuElementMe"]';
    const GET_TRACKING_INFO = '//*[@id="btnGetTrackingInfo"]';
    const NOTIFICATION_ADD_EMAIL_INPUT = '//*[@id="notificationsAddEmailInput"]';
    const CREATE_NEW_NOTIFICATION_LIST_CONTAINER = '//*[@id="createNewNotificationsListContainer"]/div';
    const GLOBAL_DELETE_NOTOFICAITON_LIST = '//*[@id="globalDeleteNotificationList"]'; 
    const SMART_SEARCH_BLOCK = '//*[@id="smartSearchBlock"]/a';
    const NEW_SMART_SEARCH_LINK = '//*[@id="newSmartSearchLink"]';
    const SUMMARY_SUB_VIEW = '//*[@id="summarySubView"]/div[3]/div/div/button[1]';    
    const SAVE_NEW_DESTINATION = '#saveNewDestination';
    const SMART_SEARCH_MATCH_TYPE = '#smartsearchmatchtype';
    const SMART_SEACH_PERIOD_ENABLED = '#smartsearchperiodenabled';
    const SMART_SEARCH_NAME = '#smartsearchname';
    const SMART_SEARCH_PERIOD_TYPE = '#smartsearchperiodtype';
    const LIBRARY_SEARCH_CONTAINER = '#librarySearchContainer';
    const LIBRARY_MENU_ELEMENT_DESTINATION = '#libraryMenuElementDestinations';
    const DESTINATION_QUICKLINK = '#destinations-quicklinks';
    const ASSET_POPUP_CONTAINER_QUICKLINK = '#assetPopUpContainer-quicklinks';
    const CLOSE_DESTINATION_QUICKLINK = '#closeDestination-quicklinks';
    const EMPTY_DESTINATION_QUICKLINK = '#emptyDestination-quicklinks';
    const DESTINATION_CONTENT_CONTAINER_QUICKLINK = '#destinationsContentContainer-quicklinks';
    const NOTIFICATIONS_TAB_CONTENT = '#notifications-tab-content';  
    const LIBRARY_CLEAR_SEARCH_FILTERS = '#libraryClearSearchFilters';
    const LIBRARY_SLIDER_FILTER_CONTAINTER = '#librarySliderFilterContainer';
    const LIBRARY_CONTENT_FILTER = '#libraryContentFilter';
    const LIBRARY_CONTENT_FILTER_CONTENT = '#libraryContentFilterContent'; 
    const TAB_ASSET_INFORMATION = '#assetInformation';
    const TAB_SMART_SEARCH = '#smartsearch';
    const FILTER_MENU_CATEGORY = '#filterMenuCategory';
    const FILTER_MENU_CAMPANIGN = '#filterMenuCampaign';    
    const FILTER_MENU_CUSTOMER = '#filterMenuCustomer';
    const FILTER_MENU_STATUS = '#filterMenuStatus';
    const UPLOAD_BROWSE_BUTTON = '#uploadBrowseButton';
    const UPLOAD_DESTINATION_BUTTON = '#uploadDestinations'; 
    const GLOBAL_DELETE_NOTIFICATIONS_LIST= '#globalDeleteNotificationList';
    const CREATE_NEW_LIST_TEXT_CONTAINER_UPLOAD_NOTIFICATION = '#createNewListTextContainerUploadNotiFications'; 
    const OPTION_SHARE_WITH_COMPANY_USERS = '#optionsharewithcompanyusers';
    const DESTINATION_LIBRARY_UPLOAD = '#destinationlibraryupload';
    const CHANGE_ACTIVE_LIST = '#changeActiveList';
    const ORDER_AGREE= '#orderagree';       
    const SHOW_ASSETS_DURING_UPLOAD = 'ShowAssetsDuringUpload';
    const DEFAULT_ITEMS_PER_PAGE = 'DefaultItemsPerPage';
    const SHOW_TOOL_TIP = 'ShowTooltips';  
}