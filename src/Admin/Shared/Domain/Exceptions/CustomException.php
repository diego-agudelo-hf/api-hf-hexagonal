<?php

namespace Src\Admin\Shared\Domain\Exceptions;

class CustomException extends \Exception
{
    public function toException(): array
    {
        $classTemporaly = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemporaly->getName());

        return [
            'status' => $this->getCode(),
            'error' => true,
            'class' => end($class),
            'message' => $this->getMessage()
        ];
    }
}
