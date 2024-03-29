<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\DeleteImagesResponseBody\imageResponses;

use AlibabaCloud\Tea\Model;

class imageResponse extends Model
{
    /**
     * @description The HTTP status code that is returned when the image is deleted.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the image that is requested for deletion.
     *
     * @example cpm-xxxxxxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The message that is returned when the image is deleted.
     *
     * @example Success.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'imageId' => 'ImageId',
        'message' => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
