<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result\privateNetwork\whiteIpGroup;

class privateNetwork extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $pvlEndpointId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var whiteIpGroup[]
     */
    public $whiteIpGroup;
    protected $_name = [
        'domain' => 'domain',
        'enabled' => 'enabled',
        'port' => 'port',
        'pvlEndpointId' => 'pvlEndpointId',
        'type' => 'type',
        'vpcId' => 'vpcId',
        'whiteIpGroup' => 'whiteIpGroup',
    ];

    public function validate()
    {
        if (\is_array($this->whiteIpGroup)) {
            Model::validateArray($this->whiteIpGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->pvlEndpointId) {
            $res['pvlEndpointId'] = $this->pvlEndpointId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->whiteIpGroup) {
            if (\is_array($this->whiteIpGroup)) {
                $res['whiteIpGroup'] = [];
                $n1 = 0;
                foreach ($this->whiteIpGroup as $item1) {
                    $res['whiteIpGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['pvlEndpointId'])) {
            $model->pvlEndpointId = $map['pvlEndpointId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['whiteIpGroup'])) {
            if (!empty($map['whiteIpGroup'])) {
                $model->whiteIpGroup = [];
                $n1 = 0;
                foreach ($map['whiteIpGroup'] as $item1) {
                    $model->whiteIpGroup[$n1++] = whiteIpGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
