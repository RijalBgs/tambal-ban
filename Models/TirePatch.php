<?php

class TirePatch
{
	private $id;
	private $name;
	private $description;
	private $address;
	private $whatsapp;
	private $accountId;

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getWhatsapp()
	{
		return $this->whatsapp;
	}

	public function getAccountId()
	{
		return $this->accountId;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function setWhatsapp($whatsapp)
	{
		$this->whatsapp = $whatsapp;
	}

	public function setAccountId($accountId)
	{
		$this->accountId = $accountId;
	}
}
