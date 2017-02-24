<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of kk_constants
 *
 * @author blinov_is
 */
//ACTIONS
//KKController
const ACT_CTRLR_GET_MYCONF_INFO = 1;           //get ctrlr configuration, ID, stamp
const ACT_CTRLR_GET_MYCONF_DATA = 2;           //get ctrlr configuration
const ACT_CTRLR_GET_PLUGIN_INFO = 5;          //get plugins id, version and config stamp
const ACT_CTRLR_GET_PLUGIN_DATA = 6;          //get extended plugins info (with file names)
const ACT_CTRLR_GET_FILES_INFO_BIN = 10;          //get bin files info
const ACT_CTRLR_GET_FILES_INFO_EXTCONF = 11;        //get conf files info
const ACT_CTRLR_DATA_KKPIN = 50;               //KKSystem PIN
const ACT_CTRLR_CMD_REBOOT_KKCTRL = 100;
const ACT_CTRLR_CMD_REBOOT_HW = 101;
const ACT_CTRLR_CMD_POWEROFF_HW = 102;
//
//
        //EXTConnector
const ACT_CTRLR_EXTCONN_GETPINDATA = 80;
const ACT_CTRLR_EXTCONN_PUTPINDATA = 81;
//PhoneApp
const ACT_PHONEAPP_GET_CARINFO = 1;
const ACT_PHONEAPP_GET_DIAGINFO = 2;
const ACT_PHONEAPP_GET_MEDIA = 3;

//PARAMETERS
//KKController
const PARAM_CTRLR_POST_REQUEST_ACT = "action";
const PARAM_CTRLR_POST_REQUEST_MYUUID = "myid";
const PARAM_CTRLR_POST_REQUEST_CONFUUID = "confuid";
const PARAM_CTRLR_POST_REQUEST_REQFILESBIN = "reqfilesbin";
const PARAM_CTRLR_POST_REQUEST_OBJ = "json_object";
//EXTConnector
//PhoneApp
const PARAM_PHONEAPP_POST_REQUEST_ACT = "action";
const PARAM_PHONEAPP_POST_REQUEST_MYUUID = "myid";
const PARAM_PHONEAPP_POST_REQUEST_CONFUUID = "confuid";

//MainWeb
//Login
const PARAM_WEB_POST_ACTION = "action";
const PARAM_WEB_POST_LOGIN_LOGIN = "mpt_loginfield";
const PARAM_WEB_POST_LOGIN_PASS = "mpt_passfield";
const PARAM_WEB_POST_LOGIN_SKIPLOGIN = "mpt_skiploginscreen";

const ACT_WEB_LOGIN_LOGIN = 1;
const ACT_WEB_LOGIN_LOGOFF = 9;

const ACT_WEB_SYSTEM_GET_PLUGINS = 20;
const ACT_WEB_SYSTEM_GET_KKCAR_DEVICES_LIST = 30;
const ACT_WEB_SYSTEM_GET_KKCAR_ACTIVE_DEVICE = 31;
const ACT_WEB_SYSTEM_SET_KKCAR_ACTIVE_DEVICE = 32;






const SSN_AUTH_LOGIN = "account";         //login id
const SSN_AUTH_LOGIN_ID = "account_id"; //link to db id
const SSN_AUTH_ROLE = "account_role"; // 10 - admin
const SSN_AUTH_STATE = "auth_state"; //true - false
const SSN_ROUTE_CURRPAGE = "page";
