<?php

namespace Flyty\HuaweiObs\Internal\Signature;

use Flyty\HuaweiObs\Internal\Common\Model;

interface SignatureInterface
{
	function doAuth(array &$requestConfig, array &$params, Model $model);
}