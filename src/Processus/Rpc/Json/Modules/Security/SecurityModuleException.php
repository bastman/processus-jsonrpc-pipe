<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seb
 * Date: 10/19/12
 * Time: 11:06 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Rpc\Json\Modules\Security;

use Processus\Rpc\Json\Modules\Base\BaseModuleException;

class SecurityModuleException extends BaseModuleException
{

    const ERROR_RPC_SIGNATURE_INVALID = 'ERROR_RPC_SIGNATURE_INVALID';

}
