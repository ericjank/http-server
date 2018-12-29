<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\HttpServer\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
class Controller extends AbstractAnnotation
{
    /**
     * @var string|null
     */
    public $prefix;

    public function __construct($value = null)
    {
        $this->value = $value;
        if (isset($value['prefix'])) {
            $this->prefix = $value['prefix'];
        }
    }
}
