<?php

    function xarayatesting_scans_modules_to_remove()
    {
        $data['items'] = xarMod::apiFunc('modules', 'admin', 'getlist', ['filter' => ['State' => xarMod::STATE_MISSING_FROM_ACTIVE]]);
        xarTpl::setPageTemplateName('admin');
        return $data;
    }
