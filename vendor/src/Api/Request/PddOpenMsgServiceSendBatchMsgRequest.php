<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddOpenMsgServiceSendBatchMsgRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<String>, "phone_numbers")
	*/
	private $phoneNumbers;

	/**
	* @JsonProperty(String, "sign_name")
	*/
	private $signName;

	/**
	* @JsonProperty(Long, "template_code")
	*/
	private $templateCode;

	/**
	* @JsonProperty(List<\Com\Pdd\Pop\Sdk\Api\Request\PddOpenMsgServiceSendBatchMsgRequest_Map<String, String>>, "template_param_json")
	*/
	private $templateParamJson;

	/**
	* @JsonProperty(String, "out_id")
	*/
	private $outId;

	/**
	* @JsonProperty(String, "sms_up_extend_code")
	*/
	private $smsUpExtendCode;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "phone_numbers", $this->phoneNumbers);
		$this->setUserParam($params, "sign_name", $this->signName);
		$this->setUserParam($params, "template_code", $this->templateCode);
		$this->setUserParam($params, "template_param_json", $this->templateParamJson);
		$this->setUserParam($params, "out_id", $this->outId);
		$this->setUserParam($params, "sms_up_extend_code", $this->smsUpExtendCode);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.open.msg.service.send.batch.msg";
	}

	public function setPhoneNumbers($phoneNumbers)
	{
		$this->phoneNumbers = $phoneNumbers;
	}

	public function setSignName($signName)
	{
		$this->signName = $signName;
	}

	public function setTemplateCode($templateCode)
	{
		$this->templateCode = $templateCode;
	}

	public function setTemplateParamJson($templateParamJson)
	{
		$this->templateParamJson = $templateParamJson;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
	}

	public function setSmsUpExtendCode($smsUpExtendCode)
	{
		$this->smsUpExtendCode = $smsUpExtendCode;
	}

}
