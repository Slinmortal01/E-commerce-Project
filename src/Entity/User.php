<?php 

namespace Project\Entity;

class User
{
    private ?string $user_id;
    private ?string $user_fullname;
    private ?string $user_username;
    private ?string $user_email;
    private ?string $user_password;

    public function __construct(
        ?string $user_id,
        ?string $user_fullname,
        ?string $user_username,
        ?string $user_email,
        ?string $user_password
    ) {
        $this->user_fullname = $user_fullname;
        $this->user_username = $user_username;
        $this->user_email = $user_email;
        $this->user_password = password_hash($user_password);
    }
    public function user_id(): string{
        return $this->user_id;
    }
    public function user_fullname(): string
    {
        return $this->user_fullname;
    }
    public function user_username(): string
    {
        return $this->user_username;
    }
    public function user_email(): string
    {
        return $this->user_email;
    }
    public function user_password(): string
    {
        return $this->user_password;
    }
}