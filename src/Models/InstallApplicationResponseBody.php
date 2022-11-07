<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\InstallApplicationResponseBody\taskId;
use AlibabaCloud\Tea\Model;

class InstallApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskId
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = null !== $this->taskId ? $this->taskId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = taskId::fromMap($map['TaskId']);
        }

        return $model;
    }
}