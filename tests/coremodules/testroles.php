<?php

    $suite = new xarTestSuite('Roles module tests');
    $suites[] = $suite;

    class testRolesAdminAddmember extends xarTestCase
    {

        function testAddmemberNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'addmember');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

    }
    $suite->AddTestCase('testRolesAdminAddmember','addmember (admin) function tests');

    class testRolesAdminClearsessions extends xarTestCase
    {

        function testClearsessions()
        {
            try{
                $this->expected = true;
                $this->actual = xarModAPIFunc('roles', 'admin', 'clearsessions');
                return $this->assertTrue($this->actual,"Call with no params returns true");
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

        // Note: this function needs looking at

    }
    $suite->AddTestCase('testRolesAdminClearsessions','clearsessions (admin) function tests');

    class testRolesAdminGetgroupmenulinks extends xarTestCase
    {

        function testGetgroupmenulinks()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','admin','getgroupmenulinks');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns an array');
        }

        function testGetgroupmenulinksWithParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','admin','getgroupmenulinks');
            $this->actual =xarModAPIFunc('roles','admin','getgroupmenulinks', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }

    }
    $suite->AddTestCase('testRolesAdminGetgroupmenulinks','getgroupmenulinks (admin) function tests');

    class testRolesAdminGetmenulinks extends xarTestCase
    {

        function testGetmenulinks()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','admin','getmenulinks');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns an array');
        }

        function testGetmenulinksWithParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','admin','getmenulinks');
            $this->actual = xarModAPIFunc('roles','admin','getmenulinks', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }

    }
    $suite->AddTestCase('testRolesAdminGetmenulinks','getmenulinks (admin) function tests');

    class testRolesAdminGetmessageincludestring extends xarTestCase
    {

        function testGetmessageincludestringNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessageincludestring');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

        function testGetmessageincludestringBadTemplateParam()
        {
            try{
                $args = array('template' => 'someinvalidtemplate');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessageincludestring',$args);
                $res =  $this->assertSame($this->actual,$this->expected,'Call with an invalid template param throws an exception');
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,'Call with an invalid template param throws an exception');
            }
        }

        function testGetmessageincludestringBadModuleParam()
        {
            try{
                $args = array('module' => 'someinvalidmodule', 'template' => 'message-vars');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessageincludestring',$args);
                $res =  $this->assertSame($this->actual,$this->expected,'Call with an invalid module param throws an exception');
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,'Call with an invalid module param throws an exception');
            }
        }

        function testGetmessageincludestring()
        {
            $args = array('module' => 'mail', 'template' => 'message-vars');
            $this->expected = '[string]';
            $this->actual = xarModAPIFunc('roles', 'admin', 'getmessageincludestring',$args);
            return $this->assertTrue(is_string($this->actual),'Call with valid module name and template params returns a string');
        }

    }
    $suite->AddTestCase('testRolesAdminGetmessageincludestring','getmessageincludestring (admin) function tests');

    class testRolesAdminGetmessagestrings extends xarTestCase
    {

        function testGetmessagestringsNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessagestrings');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

        function testGetmessagestringsBadTemplateParam()
        {
            try{
                $args = array('template' => 'someinvalidtemplate');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessagestrings',$args);
                $res =  $this->assertSame($this->actual,$this->expected,'Call with an invalid template param throws an exception');
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,'Call with an invalid template param throws an exception');
            }
        }

        function testGetmessagestringsBadModuleParam()
        {
            try{
                $args = array('module' => 'someinvalidmodule', 'template' => 'welcome');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'getmessagestrings',$args);
                $res =  $this->assertSame($this->actual,$this->expected,'Call with an invalid module param throws an exception');
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,'Call with an invalid module param throws an exception');
            }
        }

        function testGetmessagestrings()
        {
            $args = array('module' => 'roles', 'template' => 'welcome');
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles', 'admin', 'getmessagestrings',$args);
            return $this->assertTrue(is_array($this->actual),'Call with valid module name and template params returns an array');
        }

    }
    $suite->AddTestCase('testRolesAdminGetmessagestrings','getmessagestrings (admin) function tests');

    class testRolesAdminMenu extends xarTestCase
    {

        function testMenu()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','admin','menu');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns an array');
        }

        function testMenuWithParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','admin','menu');
            $this->actual = xarModAPIFunc('roles','admin','menu', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }

    }
    $suite->AddTestCase('testRolesAdminMenu','menu (admin) function tests');

    class testRolesAdminPurge extends xarTestCase
    {

        function testPurgeNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'purge');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }
        /*
        function testPurgeWithActiveStateParams()
        {
            try{
                $this->expected = '[exception]';
                $args = array('state' => ROLES_STATE_ACTIVE);
                $this->actual = xarModAPIFunc('roles', 'admin', 'purge', $args);
                $res = $this->assertSame($this->actual,$this->expected,"Call with bad state param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad state param throws exception");
            }
        }
        */
    }
    $suite->AddTestCase('testRolesAdminPurge','purge (admin) function tests');

    class testRolesAdminRecall extends xarTestCase
    {

        function testRecallNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'recall');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

    }
    $suite->AddTestCase('testRolesAdminRecall','recall (admin) function tests');

    class testRolesAdminSendusermail extends xarTestCase
    {

        function testSendusermailNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'sendusermail');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

    }
    $suite->AddTestCase('testRolesAdminSendusermail','sendusermail (admin) function tests');

    class testRolesAdminStateupdate extends xarTestCase
    {
        function testStateupdateNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'admin', 'stateupdate');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }
        function testStateupdateBadIDParam()
        {
            try{
                $this->expected = '[exception]';
                $args = array('state' => ROLES_STATE_ACTIVE, 'id' => 12345678);
                $this->actual = xarModAPIFunc('roles', 'admin', 'stateupdate', $args);
                $res = $this->assertSame($this->actual,$this->expected,"Call with bad id param throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws an exception");
            }
        }
    }
    $suite->AddTestCase('testRolesAdminStateupdate','stateupdate (admin) function tests');


    /* user api */

    class testRolesUserAddmember extends xarTestCase
    {

        function testAddmemberNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'addmember');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

    }
    $suite->AddTestCase('testRolesUserAddmember','addmember (user) function tests');

    class testRolesUserCheckprivilege extends xarTestCase
    {

        function testCheckprivilegeNoParams()
        {
            try{
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'checkprivilege');
                $res = $this->assertSame($this->actual,$this->expected,"Call with no params throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws an exception");
            }
        }

    }
    $suite->AddTestCase('testRolesUserCheckprivilege','checkprivilege (user) function tests');

    class testRolesUserCountall extends xarTestCase
    {
        function testCountallNoParams()
        {
            try {
                $this->expected = '[integer]';
                $this->actual = xarModAPIFunc('roles', 'user', 'countall');
                $res = $this->assertTrue(is_numeric($this->actual),"Call with no params returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params returns integer");
            }
        }
        function testCountallStateParam()
        {
            try {
                $this->expected = '[integer]';
                $args = array('state' => 3);
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertTrue(is_numeric($this->actual),"Call with state param returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with state param returns integer");
            }
        }
        function testCountallInclude_anonymousParam()
        {
            try {
                $this->expected = '[integer]';
                $args = array('include_anonymous' => false);
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertTrue(is_numeric($this->actual),"Call with include_anonymous param returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with include_anonymous param returns integer");
            }
        }
        function testCountallSelectionParam()
        {
            try {
                $this->expected = '[integer]';
                $args = array('selection' => ' AND uname = "Admin"');
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertTrue(is_numeric($this->actual),"Call with selection param returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with selection param returns integer");
            }
        }
        function testCountallBadSelectionParam()
        {
            try {
                $this->expected = '[exception]';
                $args = array('selection' => 'something');
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertSame($this->actual,$this->expected,"Call with bad selection param throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad selection param throws an exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserCountall','countall (user) function tests');

    class testRolesUserCountallactive extends xarTestCase
    {
        function testCountallactiveNoParams()
        {
            try {
                $this->expected = '[integer]';
                $this->actual = xarModAPIFunc('roles', 'user', 'countallactive');
                $res = $this->assertTrue(is_numeric($this->actual),"Call with no params returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params returns integer");
            }
        }
        function testCountallactiveInclude_anonymousParam()
        {
            try {
                $this->expected = '[integer]';
                $args = array('include_anonymous' => false);
                $this->actual = xarModAPIFunc('roles', 'user', 'countallactive', $args);
                $res = $this->assertTrue(is_numeric($this->actual),"Call with include_anonymous param returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with include_anonymous param returns integer");
            }
        }
        function testCountallactiveSelectionParam()
        {
            try {
                $this->expected = '[integer]';
                $args = array('selection' => ' AND a.uname = "Admin"');
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertTrue(is_numeric($this->actual),"Call with selection param returns integer");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with selection param returns integer");
            }
        }
        function testCountallactiveBadSelectionParam()
        {
            try {
                $this->expected = '[exception]';
                $args = array('selection' => 'something');
                $this->actual = xarModAPIFunc('roles', 'user', 'countall', $args);
                $res = $this->assertSame($this->actual,$this->expected,"Call with bad selection param throws an exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad selection param throws an exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserCountallactive','countallactive (user) function tests');

    class testRolesUserCountgroups extends xarTestCase
    {
        function testCountgroups()
        {
            $this->expected = '[integer]';
            $this->actual = xarModAPIFunc('roles','user','countgroups');
            return $this->assertTrue(is_numeric($this->actual),'Call with no params returns integer');
        }
        function testCountgroupsWithParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','user','countgroups');
            $this->actual = xarModAPIFunc('roles','user','countgroups', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same as without');
        }
    }
    $suite->AddTestCase('testRolesUserCountgroups','countgroups (user) function tests');

    class testRolesUserCountitems extends xarTestCase
    {
        function testCountitems()
        {
            $this->expected = '[integer]';
            $this->actual = xarModAPIFunc('roles','user','countitems');
            return $this->assertTrue(is_numeric($this->actual),'Call with no params returns integer');
        }
        function testCountitemsWithParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','user','countitems');
            $this->actual = xarModAPIFunc('roles','user','countitems', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same as without');
        }
    }
    $suite->AddTestCase('testRolesUserCountitems','countitems (user) function tests');

    class testRolesUserDecode_shorturl extends xarTestCase
    {
        function testDecode_shorturl()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','decode_shorturl');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserDecode_shorturl','decode_shorturl (user) function tests');

    class testRolesUserEncode_shorturl extends xarTestCase
    {
        function testEncode_shorturl()
        {
            $this->expected = '';
            $this->actual = xarModAPIFunc('roles','user','encode_shorturl');
            return $this->assertTrue(empty($this->actual),'Call with no params returns empty');
        }
        function testEncode_shorturlfuncParam()
        {
            $args = array('func' => 'view');
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','encode_shorturl', $args);
            return $this->assertTrue(is_array($this->actual),'Call with func param returns array');
        }
    }
    $suite->AddTestCase('testRolesUserEncode_shorturl','encode_shorturl (user) function tests');

    class testRolesUserGet extends xarTestCase
    {
        function testGetNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetIdParam()
        {
            try {
                $args = array('id' => 3);
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with id param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with id param returns array");
            }
        }
        function testGetBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
        function testGetNameParam()
        {
            try {
                $args = array('name' => 'Administrator');
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with name param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with name param returns array");
            }
        }
        function testGetBadNameParam()
        {
            try {
                $args = array('name' => 'someunknowname');
                $this->expected = false;
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad name param returns false");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad name param returns false");
            }
        }
        function testGetUnameParam()
        {
            try {
                $args = array('uname' => 'Admin');
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with uname param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with uname param returns array");
            }
        }
        function testGetBadUnameParam()
        {
            try {
                $args = array('uname' => 'someunknowuname');
                $this->expected = false;
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad uname param returns false");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad uname param returns false");
            }
        }
        function testGetEmailParam()
        {
            try {
                $args = array('email' => xarModVars::get('mail', 'adminmail'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with email param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with email param returns array");
            }
        }
        function testGetBadEmailParam()
        {
            try {
                $args = array('email' => 'invalid@emailaddress.com');
                $this->expected = false;
                $this->actual = xarModAPIFunc('roles', 'user', 'get', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad email param returns false");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad email param returns false");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGet','get (user) function tests');

    class testRolesUserGetactive extends xarTestCase
    {
        function testGetactiveNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getactive');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetIdParam()
        {
            try {
                $args = array('id' => xarModUserVars::get('id'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getactive', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with id param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with id param returns array");
            }
        }
        function testGetBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getactive', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGetactive','getactive (user) function tests');

    class testRolesUserGetall extends xarTestCase
    {
        function testGetall()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getall');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetall','getall (user) function tests');

    class testRolesUserGetallactive extends xarTestCase
    {
        function testGetallactive()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getallactive');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetallactive','getallactive (user) function tests');

    class testRolesUserGetallgroups extends xarTestCase
    {
        function testGetallgroups()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getallgroups');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetallgroups','getallgroups (user) function tests');

    /*
    class testRolesUserGetallroles extends xarTestCase
    {
        function testGetallroles()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getallroles');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetallroles','getallroles (user) function tests');
    */

    class testRolesUserGetancestors extends xarTestCase
    {
        function testGetancestorsNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getancestors');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetIdParam()
        {
            try {
                $args = array('id' => xarModUserVars::get('id'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getancestors', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with id param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with id param returns array");
            }
        }
        function testGetBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getancestors', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
    }

    class testRolesUserGetdefaultauthdata extends xarTestCase
    {
        function testGetdefaultauthdata()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getdefaultauthdata');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetdefaultauthdata','getdefaultauthdata (user) function tests');

    class testRolesUserGetdefaultregdata extends xarTestCase
    {
        function testGetdefaultregdata()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getdefaultregdata');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserGetdefaultregdata','getdefaultregdata (user) function tests');

    class testRolesUserGetdeleteduser extends xarTestCase
    {
        function testGetdeleteduserNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getdeleteduser');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetIdParam()
        {
            try {
                $args = array('id' => xarModUserVars::get('id'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getdeleteduser', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with id param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with id param returns array");
            }
        }
        function testGetBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getdeleteduser', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGetdeleteduser','getdeleteduser (user) function tests');

    class testRolesUserGetitemlinks extends xarTestCase
    {
        function testGetitemlinks()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getitemlinks');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetitemlinksItemidsParam()
        {
            try {
                $args = array('itemids' => array(xarModUserVars::get('id')));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getitemlinks', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with itemids param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with itemids param returns array");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGetitemlinks','getitemlinks (user) function tests');

    class testRolesUserGetitemtypes extends xarTestCase
    {
        function testGetitemtypes()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getitemtypes');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
        function testGetitemtypesParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','user','getitemtypes');
            $this->actual =xarModAPIFunc('roles','user','getitemtypes', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }
    }
    $suite->AddTestCase('testRolesUserGetitemtypes','getitemtypes (user) function tests');

    class testRolesUserGetmenulinks extends xarTestCase
    {
        function testGetmenulinks()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getmenulinks');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
        function testGetmenulinksParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','user','getmenulinks');
            $this->actual =xarModAPIFunc('roles','user','getmenulinks', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }
    }
    $suite->AddTestCase('testRolesUserGetmenulinks','getmenulinks (user) function tests');

    class testRolesUserGetprimaryparent extends xarTestCase
    {
        function testGetprimaryparent()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getprimaryparent');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetprimaryparentItemidParam()
        {
            try {
                $args = array('itemid' => xarModUserVars::get('id'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getprimaryparent', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with itemid param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with itemid param returns array");
            }
        }
        function testGetprimaryparentBadItemidParam()
        {
            try {
                $args = array('itemid' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getprimaryparent', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad itemid param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad itemid param throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGetprimaryparent','getprimaryparent (user) function tests');

    class testRolesUserGetstates extends xarTestCase
    {
        function testGetstates()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','getstates');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
        function testGetstatesParams()
        {
            $args = array('foo' => 'bar');
            $this->expected = xarModAPIFunc('roles','user','getstates');
            $this->actual =xarModAPIFunc('roles','user','getstates', $args);
            return $this->assertSame($this->actual,$this->expected,'Call with params returns the same array as without');
        }
    }
    $suite->AddTestCase('testRolesUserGetstates','getstates (user) function tests');

    class testRolesUserGetuserhome extends xarTestCase
    {
        function testGetuserhome()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getuserhome');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetuserhomeItemidParam()
        {
            try {
                $args = array('itemid' => xarModUserVars::get('id'));
                $this->expected = '[string]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getuserhome', $args);
                $res = $this->assertTrue(is_string($this->actual),"Call with itemid param returns string");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with itemid param returns string");
            }
        }
        function testGetuserhomeBadItemidParam()
        {
            try {
                $args = array('itemid' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getuserhome', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad itemid param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad itemid param throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserGetuserhome','getuserhome (user) function tests');

    class testRolesUserGetusers extends xarTestCase
    {
        function testGetusersNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getusers');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testGetIdParam()
        {
            try {
                $args = array('id' => xarModUserVars::get('id'));
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getusers', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with id param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with id param returns array");
            }
        }
        /*
        function testGetBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'getusers', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
        */
    }
    $suite->AddTestCase('testRolesUserGetusers','getusers (user) function tests');

    class testRolesUserLeftjoin extends xarTestCase
    {
        function testLeftjoin()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','leftjoin');
            return $this->assertTrue(is_array($this->actual),'Call with no params returns array');
        }
    }
    $suite->AddTestCase('testRolesUserLeftjoin','leftjoin (user) function tests');

    class testRolesUserMakepass extends xarTestCase
    {
        function testMakepass()
        {
            $this->expected = '[array]';
            $this->actual = xarModAPIFunc('roles','user','makepass');
            return $this->assertTrue(is_string($this->actual),'Call with no params returns string');
        }
        function testMakepassParams()
        {
            $args = array('foo' => 'bar');
            $this->actual =xarModAPIFunc('roles','user','makepass', $args);
            return $this->assertTrue(is_string($this->actual),'Call with params returns string');
        }
    }
    $suite->AddTestCase('testRolesUserMakepass','makepass (user) function tests');

    class testRolesUserParseuserhome extends xarTestCase
    {
        function testParseuserhome()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'parseuserhome');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testParseuserhomeUrlParam()
        {
            try {
                $args = array('url' => '/');
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'parseuserhome', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with url param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with url param returns array");
            }
        }
        function testParseuserhomeTruecurrenturlParam()
        {
            try {
                $args = array('truecurrenturl' => '/');
                $this->expected = '[array]';
                $this->actual = xarModAPIFunc('roles', 'user', 'parseuserhome', $args);
                $res = $this->assertTrue(is_array($this->actual),"Call with truecurrenturl param returns array");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with truecurrenturl param returns array");
            }
        }
    }
    $suite->AddTestCase('testRolesUserParseuserhome','parseuserhome (user) function tests');

    class testRolesUserRemovemember extends xarTestCase
    {
        function testRemovememberNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'removemember');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
        function testRemovememberBadIdParam()
        {
            try {
                $args = array('id' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'removemember', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad id param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad id param throws exception");
            }
        }
        function testRemovememberBadGidParam()
        {
            try {
                $args = array('gid' => 'foo');
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'removemember', $args);
                $res = $this->assertSame($this->expected,$this->actual,"Call with bad gid param throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with bad gid param throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserRemovemember','removemember (user) function tests');

    class testRolesUserUpdatestatus extends xarTestCase
    {
        function testUpdatestatusNoParams()
        {
            try {
                $this->expected = '[exception]';
                $this->actual = xarModAPIFunc('roles', 'user', 'updatestatus');
                $res = $this->assertSame($this->expected,$this->actual,"Call with no params throws exception");
                return $res;
            } catch(Exception $e) {
                return $this->assertTrue(true,"Call with no params throws exception");
            }
        }
    }
    $suite->AddTestCase('testRolesUserUpdatestatus','updatestatus (user) function tests');
?>