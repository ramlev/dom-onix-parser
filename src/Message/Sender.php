<?php

namespace Dso\Onix\Message;

class Sender
{

    /**
     * Name of the sender, e.g. organization
     *
     * @var ?string
     */
    protected ?string $SenderName = null;

    /**
     * Name of the primary sender contact,
     * e.g. first name / last name
     *
     * @var ?string
     */
    protected ?string $ContactName = null;

    /**
     * E-Mail address of the sender
     *
     * @var ?string
     */
    protected ?string $EmailAddress = null;

    public function setSenderName(string $senderName): void
    {
        $this->SenderName = $senderName;
    }

    public function setContactName(string $contactName): void
    {
        $this->ContactName = $contactName;
    }

    public function setEmailAddress(string $emailAddress): void
    {
        $this->EmailAddress = $emailAddress;
    }

    public function getSenderName(): ?string
    {
        return $this->SenderName;
    }

    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }

}