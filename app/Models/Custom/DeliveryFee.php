<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 06/11/2017
 * Time: 10:03
 */

namespace App\Models\Custom;


use Illuminate\Database\Eloquent\Model;

class DeliveryFee extends Model
{
    /**
     * @return mixed
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * @param mixed $agentId
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param mixed $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    /**
     * @return mixed
     */
    public function getAgentDesc()
    {
        return $this->agentDesc;
    }

    /**
     * @param mixed $agentDesc
     */
    public function setAgentDesc($agentDesc)
    {
        $this->agentDesc = $agentDesc;
    }

    /**
     * @return mixed
     */
    public function getShippingId()
    {
        return $this->shippingId;
    }

    /**
     * @param mixed $shippingId
     */
    public function setShippingId($shippingId)
    {
        $this->shippingId = $shippingId;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return mixed
     */
    public function getShippingDesc()
    {
        return $this->shippingDesc;
    }

    /**
     * @param mixed $shippingDesc
     */
    public function setShippingDesc($shippingDesc)
    {
        $this->shippingDesc = $shippingDesc;
    }

    /**
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }
    protected $agentId;
    protected $agent;
    protected $agentDesc;
    protected $shippingId;
    protected $shipping;
    protected $shippingDesc;
    protected $fee = 0;
}