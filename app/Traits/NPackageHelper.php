<?php

namespace App\Traits;

use App\Models\Notice\Packages\NPackage;

trait NPackageHelper
{

    /**
     * Notice Package Status
     *
     * @param  mixed $status
     * @return void
     */
    public function getStatus($status)
    {
        switch ($status) {
            case NPackage::STATUS['DRAFT']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-warning'>Draft</span>";
                break;
            case NPackage::STATUS['ACTIVE']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-success'>Active</span>";
                break;
        }
    }
}
