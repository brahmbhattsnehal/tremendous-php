<?php
declare(strict_types=1);

namespace Tremendous\Reward;

class Recipient
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    public function __construct(string $name, string $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone= $phone;
    }

    public static function createFromArray(array $recipient): self
    {
        return new self($recipient['name'], isset($recipient['email']) ? $recipient['email'] : "", isset($recipient['phone']) ? $recipient['phone'] : "");
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}